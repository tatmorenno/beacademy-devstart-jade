<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function indexAdmin()
    {
        $products = Product::all();

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
        $product = new Product;
        $product->name = $request->name;
        $product->cost_price= $request->cost_price;
        $product->quantity= $request->quantity;
        $product->sale_price= $request->sale_price;
        $product->image= $request->image;
        $product->description= $request->description;

        $product->save();

        return redirect()->route('products.indexAdmin');

    }



}
