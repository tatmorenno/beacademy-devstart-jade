<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Mailgun\Mailgun;

class CheckoutController extends Controller
{

    public function index()
    {
        $total = 0;
        $shoppingCarts = shoppingCart::where('user_id', Auth::id())->get();
        
            foreach($shoppingCarts as $shoppingCart) {
                $total += $shoppingCart->product->sale_price * $shoppingCart->quantity;
            }
        return view('checkout/checkout', compact('shoppingCarts', 'total'));
    }

    public function submit(Request $request)
    {
        $total = 0;
        $shoppingCartModel = ShoppingCart::where('user_id', Auth::id());
        $shoppingCarts = $shoppingCartModel->get();
        $user = Auth::user();

        foreach ($shoppingCarts as $shoppingCart) {
            $total += $shoppingCart->product->sale_price * $shoppingCart->quantity;
        }

        $response = Http::connectTimeout(600)->withHeaders([
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
            "customer_card_cvv" => $request->cc_cvv
        ]);

        if ($response->failed()) {
            throw new \Exception('Falha ao mandar mandar dados para o gateway de pagamento');
        }

        foreach ($shoppingCarts as $shoppingCart) {
            $shoppingCart->product->quantity = $shoppingCart->product->quantity - $shoppingCart->quantity;
            $shoppingCart->product->save();
        }

        $shoppingCartModel->delete();

        $mg = Mailgun::create('a2ee3d712bf71a4098ecdb0796a2c07a-1b3a03f6-266fea78');
        $mg->messages()->send('sandboxd4b4d0527a8649b6b31b336442a5064d.mailgun.org', [
            'from'    => 'Mailgun Sandbox <postmaster@sandboxd4b4d0527a8649b6b31b336442a5064d.mailgun.org>',
            'to'      => $user->name . ' <' . $user->email . '>',
            'subject' => 'Título',
            'text'    => 'Conteúdo'
        ]);

        return view('checkout/success_checkout');
    }

}