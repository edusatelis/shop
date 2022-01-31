<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('cart.index', ['products'=>$products]);
    }
}
