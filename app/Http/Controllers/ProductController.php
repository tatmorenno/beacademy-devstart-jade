<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // public function __construct(Product $product)
    // {
    //     $this->model = $product;
    // }

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }
}
