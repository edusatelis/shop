<?php

namespace App\Web\Product\Controllers;

use Domain\Product\Models\Product;
use Domain\Product\Models\ProductDescription;
use Domain\Product\Models\ProductSpecialPrice;

use Domain\Product\Models\ProductImage;
use Carbon\Carbon;


use Domain\Product\Dtos\ProductData;
use Domain\Product\Action\CreateProductAction;

use App\Core\Http\Controllers\Controller;
use App\Web\Product\Requests\ProductRequest;

class ProductController extends Controller{
    public function index(){
        $products = app(Product::class)->get();
        $descriptions = app(ProductDescription::class)->get();
        $images = app(ProductImage::class)->get();
        $prices = app(ProductSpecialPrice::class)->get();
        $date = substr(Carbon::now('America/Sao_Paulo')->toDateTimeString(),0,10);

        foreach($products as $product){
            foreach($descriptions as $description){
                
                foreach($images as $image){

                    foreach($prices as $price){
            
                        if($price->date_start == $date && $price->product_id == $product->id ){
                            $product->price = $price->price;
                        }

                        if($description->product_id == $product->id ){
                            $product->description = $description->description;
                        }

                        if($image->product_id == $product->id ){
                            $product->image_path = $image->image_path;
                        }
                    }
                }
            }
        }
        return view('product.index', compact('products'));

    }

    public function cart(){
        $products = app(Product::class)->get();
        $descriptions = app(ProductDescription::class)->get();
        $images = app(ProductImage::class)->get();
        $prices = app(ProductSpecialPrice::class)->get();
        $date = substr(Carbon::now('America/Sao_Paulo')->toDateTimeString(),0,10);

        foreach($products as $product){
            foreach($descriptions as $description){
                
                foreach($images as $image){

                    foreach($prices as $price){
            
                        if($price->date_start == $date && $price->product_id == $product->id ){
                            $product->price = $price->price;
                        }

                        if($description->product_id == $product->id ){
                            $product->description = $description->description;
                        }

                        if($image->product_id == $product->id ){
                            $product->image_path = $image->image_path;
                        }
                    }
                }
            }
        }
        return view('cart.index', compact('products'));

    }

    public function home(){
        $products = app(Product::class)->get();
        $descriptions = app(ProductDescription::class)->get();
        $images = app(ProductImage::class)->get();
        $prices = app(ProductSpecialPrice::class)->get();
        $date = substr(Carbon::now('America/Sao_Paulo')->toDateTimeString(),0,10);

        foreach($products as $product){
            foreach($descriptions as $description){
                
                foreach($images as $image){

                    foreach($prices as $price){
            
                        if($price->date_start == $date && $price->product_id == $product->id ){
                            $product->price = $price->price;
                        }

                        if($description->product_id == $product->id ){
                            $product->description = $description->description;
                        }

                        if($image->product_id == $product->id ){
                            $product->image_path = $image->image_path;
                        }
                    }
                }
            }
        }
        return view('home.index', compact('products'));

    }


    public function store(ProductRequest $request, CreateProductAction $action){

        $data = ProductData::fromRequest($request);

        $action($data);

        return back()->with(['success' => 'Produto Criado com Sucesso!']);
    }

    public function show($id){
        $product = Product::findOrFail($id);
        $descriptions = ProductDescription::where('product_id','=',$id)->get();
        $images = ProductImage::where('product_id', '=', $id)->get();
        $prices = ProductSpecialPrice::where('product_id', '=', $id)->get();
        $date = substr(Carbon::now('America/Sao_Paulo')->toDateTimeString(),0,10);

        $product->description = $descriptions[0]->description;
        $product->image_path = $images[0]->image_path;

        if($prices[0]->date_start == $date){
            $product->price = $prices[0]->price;
        }


        return view('product.show', ['product'=>$product]);

    }
}