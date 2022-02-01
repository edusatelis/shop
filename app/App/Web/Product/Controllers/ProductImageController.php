<?php

namespace App\Web\Product\Controllers;

use Domain\Product\Models\ProductImage;
use Domain\Product\Dtos\ProductImageData;
use Domain\Product\Action\CreateProductImageAction;

use App\Core\Http\Controllers\Controller;
use App\Web\Product\Requests\ProductImageRequest;

class ProductImageController extends Controller{
    public function index(){

    }

    public function store(ProductImageRequest $request, CreateProductImageAction $action){

        $data = ProductImageData::fromRequest($request);

        $action($data);

        return back()->with(['success' => 'Categoria Criada com Sucesso!']);
    }
}