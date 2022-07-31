<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;

class CheckoutController extends Controller
{

    public function index()
    {        
        return view('checkout/checkout');
    }

}
