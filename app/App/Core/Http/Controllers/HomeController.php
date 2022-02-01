<?php

namespace App\Core\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Product\Models\Product;


class HomeController extends Controller
{
   public function index(){
    $products = Product::all();
    return view('home.index', ['products'=>$products]);
   }
}
