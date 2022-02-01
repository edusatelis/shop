<?php

namespace App\Core\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }


    public function show(){
        return view('category.create');
    }
}
