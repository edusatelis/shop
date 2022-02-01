<?php

namespace App\Web\Category\Controllers;

use Domain\Category\Models\Category;
use Domain\Category\Dtos\CategoryData;
use Domain\Category\Action\CreateCategoryAction;

use App\Core\Http\Controllers\Controller;
use App\Web\Category\Requests\CategoryRequest;

class CategoryController extends Controller{
    public function index(){

    }

    public function store(CategoryRequest $request, CreateCategoryAction $action){

        $data = CategoryData::fromRequest($request);

        $action($data);

        return back()->with(['success' => 'Categoria Criada com Sucesso!']);
    }
}