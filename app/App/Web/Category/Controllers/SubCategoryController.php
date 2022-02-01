<?php

namespace App\Web\Category\Controllers;

use Domain\Category\Models\SubCategory;
use Domain\Category\Dtos\SubCategoryData;
use Domain\Category\Action\CreateSubCategoryAction;

use App\Core\Http\Controllers\Controller;
use App\Web\Category\Requests\SubCategoryRequest;

class SubCategoryController extends Controller{
    public function index(){

    }

    public function store(SubCategoryRequest $request, CreateSubCategoryAction $action){

        $data = SubCategoryData::fromRequest($request);

        $action($data);

        return back()->with(['success' => 'Sub-Categoria Criada com Sucesso!']);
    }
}