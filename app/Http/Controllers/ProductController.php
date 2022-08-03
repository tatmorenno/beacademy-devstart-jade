<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }


    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function indexAdmin()
    {
        $products = Product::paginate(5);

        return view('products.indexAdmin', compact('products'));
    }

    public function showProductsAdmin($id)
    {
        if (!$product = Product::find($id))
            return redirect()->route('products.indexAdmin');

        $title = 'Produto ' . $product->name;
        return view('products.showAdmin', compact('product', 'title'));
    }

    public function createProductsAdmin()
    {

        return view('products.create');

    }

    public function storeCreateProductsAdmin(Request $request)
    {
        //dd($request->all());
        //$product = new Product;
        //$product->name = $request->name;
        //$product->cost_price= $request->cost_price;
        //$product->quantity= $request->quantity;
        //$product->sale_price= $request->sale_price;
        //$product->image= $request->image;
        //$product->description= $request->description;

        //$product->save();

        $data = $request->all();
        $this->model->create($data);

        //return redirect()->route('products.indexAdmin');
        return redirect()->route('products.indexAdmin')->with('create', 'Produto cadastrado!');


    }

    public function editProductsAdmin($id)
    {
        if (!$product = $this->model->find($id))
            return redirect()->route('products.indexAdmin');

        return view('products.edit', compact('product'));
    }

    public function updateProductsAdmin(Request $request, $id)
    {
        if (!$product = $this->model->find($id))
            return redirect()->route('products.indexAdmin');

        $data = $request->all(); //only('nome', '')

        $product->update($data);

        return redirect()->route('products.showAdmin', $product->id)->with('update','Produto alterado!');

    }

    public function destroyProductsAdmin($id)
    {

        if(!$product= $this->model->find($id))
            return redirect()->route('products.indexAdmin');

        $product->delete();

        return redirect()->route('products.indexAdmin')->with('destroy', 'Produto excluido!');
    }

}
