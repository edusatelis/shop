<?php

namespace App\Web\Product\Controllers;

use Domain\Product\Models\Product;
use Domain\Product\Dtos\ProductData;
use Domain\Product\Action\CreateProductAction;

use App\Core\Http\Controllers\Controller;
use App\Web\Product\Requests\ProductRequest;

class ProductController extends Controller{
    public function index(){

    }

    public function store(ProductRequest $request, CreateProductAction $action){

        $data = ProductData::fromRequest($request);

        $action($data);

        return back()->with(['success' => 'Categoria Criada com Sucesso!']);
    }
}