<?php

namespace App\Web\Product\Controllers;

use Domain\Product\Models\ProductDescription;
use Domain\Product\Dtos\ProductDescriptionData;
use Domain\Product\Action\CreateProductDescriptionAction;

use App\Core\Http\Controllers\Controller;
use App\Web\Product\Requests\ProductDescriptionRequest;

class ProductDescriptionController extends Controller{
    public function index(){

    }

    public function store(ProductDescriptionRequest $request, CreateProductDescriptionAction $action){

        $data = ProductDescriptionData::fromRequest($request);

        $action($data);

        return back()->with(['success' => 'Descrição Criada com Sucesso!']);
    }
}