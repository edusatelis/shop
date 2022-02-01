<?php

namespace App\Web\Category\Controllers;

use Domain\Category\Models\Category;
use Domain\Category\Models\SubCategory;

use Domain\Category\Dtos\CategoryData;
use Domain\Category\Action\CreateCategoryAction;

use App\Core\Http\Controllers\Controller;
use App\Web\Category\Requests\CategoryRequest;

class CategoryController extends Controller{
    public function index(){

        $categories = app(Category::class)->get();
        $subcategories = app(SubCategory::class)->get();

        foreach($categories as $category){
            foreach($subcategories as $subcategory){
                if($subcategory->category_id == $category->id){ 
                    $category->subCategorias = $subcategory;
                }
            }
        }


        return view('category.index', compact('categories'));
    }
    public function show($id){
        $category = Category::findOrFail($id);
        $subcategories = SubCategory::where('category_id','=',$id)->get();

        $category->SubCategories = $subcategories;
        return view('category.show', ['category'=>$category]);

    }

    public function store(CategoryRequest $request, CreateCategoryAction $action){

        $data = CategoryData::fromRequest($request);

        $action($data);

        return back()->with(['success' => 'Categoria Criada com Sucesso!']);
    }
}