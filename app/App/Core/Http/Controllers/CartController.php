<?php

namespace App\Core\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Product\Models\Product;

class CartController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('cart.index', ['products'=>$products]);
    }
}
