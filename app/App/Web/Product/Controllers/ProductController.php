<?php

namespace App\Web\Product\Controllers;

use Domain\Product\Models\Product;
use Domain\Product\Models\ProductDescription;
use Domain\Product\Models\ProductImage;


use Domain\Product\Dtos\ProductData;
use Domain\Product\Action\CreateProductAction;

use App\Core\Http\Controllers\Controller;
use App\Web\Product\Requests\ProductRequest;

class ProductController extends Controller{
    public function index(){
        $products = app(Product::class)->get();
        $descriptions = app(ProductDescription::class)->get();
        $images = app(ProductImage::class)->get();


        return view('product.index', compact('products', 'descriptions', 'images'));

    }

    public function store(ProductRequest $request, CreateProductAction $action){

        $data = ProductData::fromRequest($request);

        $action($data);

        return back()->with(['success' => 'Produto Criado com Sucesso!']);
    }
}