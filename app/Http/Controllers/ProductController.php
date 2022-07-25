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
}
