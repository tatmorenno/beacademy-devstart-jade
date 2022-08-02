<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Order;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Mailgun\Mailgun;

class CheckoutController extends Controller
{

    public function index()
    {

        return view('checkout/checkout');
    }

    public function review()
    {

        return view('checkout/review');
    }

    public function storeCart(Request $request)
    {
        $data = $request->all();
        $cart =  Session::get('cart');
        $userId = Auth::user()->id;

        if ($cart) {
            foreach ($cart as $item) {
                $data['user_id'] = $userId;
                $data['product_id'] = $item['idProductDb'];
                $data['quantity'] = $item['quantity'];

                $shoppingCart = new ShoppingCart();
                $shoppingCart->create($data);
            }

            $total = 0;
            $shoppingCarts = ShoppingCart::where('user_id', Auth::id())->where('status', 1)->get();
            foreach ($shoppingCarts as $shoppingCart) {
                $total += $shoppingCart->product->sale_price * $shoppingCart->quantity;
            }

            return view('checkout/checkout', compact('shoppingCarts', 'total'));
        }



        return redirect()->route('checkout.index', compact('shoppingCarts'));
    }

    public function submit(Request $request)
    {
        $total = 0;
        $shoppingCartModel = ShoppingCart::where('user_id', Auth::id())->where('status', 1);
        $shoppingCarts = $shoppingCartModel->get();
        $user = Auth::user();

        foreach ($shoppingCarts as $shoppingCart) {
            $total += $shoppingCart->product->sale_price * $shoppingCart->quantity;
        }

        $response = Http::withoutVerifying()->connectTimeout(600)->withHeaders([
            'Content-Type' => 'application/json',
            'token' => 'UGFyYWLDqW5zLCB2b2PDqiBlc3RhIGluZG8gYmVtIQ==',
        ])->post('https://tracktools.vercel.app/api/checkout', [
            "transaction_type" => "card",
            "transaction_amount" => $total,
            "transaction_installments" => 1,
            "customer_name" => $request->cc_name,
            "customer_document" => "33355566677",
            "customer_card_number" => $request->cc_number,
            "customer_card_expiration_date" => $request->cc_expired,
            "customer_card_cvv" => $request->cc_cvv,
            'verify' => false,
        ]);

        if ($response->failed()) {
            throw new \Exception('Falha ao mandar mandar dados para o gateway de pagamento');
        }

        foreach ($shoppingCarts as $shoppingCart) {
            $shoppingCart->status = 0;
            $shoppingCart->product->quantity = $shoppingCart->product->quantity - $shoppingCart->quantity;
            $shoppingCart->save();
        }

        $productsIds = [];
        foreach ($shoppingCarts as $shoppingCart) {
            if ($shoppingCart->status == 0) {
                $productsIds[] = $shoppingCart->id;
            }
        }

        $arrayIds = implode(',', $productsIds);


        $order = new Order();
        $order->user_id = $user->id;
        $order->shopping_cart_id = $arrayIds;
        $order->price_total = $total;
        $order->status = "Aprovado";
        $order->save();

        $shoppingCartModel->where('status', 0)->delete();

        // $mg = Mailgun::create('a2ee3d712bf71a4098ecdb0796a2c07a-1b3a03f6-266fea78');
        // $mg->messages()->send('sandboxd4b4d0527a8649b6b31b336442a5064d.mailgun.org', [
        //     'from'    => 'Mailgun Sandbox <postmaster@sandboxd4b4d0527a8649b6b31b336442a5064d.mailgun.org>',
        //     'to'      => $user->name . ' <' . $user->email . '>',
        //     'subject' => 'Título',
        //     'text'    => 'Conteúdo'
        // ]);

        return view('checkout/success_checkout');
    }
}
