<?php

namespace App\Core\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Product\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', ['products'=>$products]);
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('product.show', ['product'=>$product]);
    }
}
