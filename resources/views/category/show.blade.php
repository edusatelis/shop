@extends('layouts/main')

@section('title', $category->name)

@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="info-container" class="col-md-6 mt-4 p-4 py-4">
            <h1 class="mt-4 p-4">{{$category->name}}</h1>

            @if($category->SubCategories == '[]')
            <h5 class="mt-4 p-4">Não Há Sub-Categorias</h5>

            @endif()
            @if($category->SubCategories != '[]')
            <h5 class="mt-4 p-4"> Sub-Categorias</h5>
            <ul>
                @foreach($category->SubCategories as $subcategory)
                <li>{{$subcategory->name}}</li>
                @endforeach()
            </ul>
            @endif()

            <!-- <p class="p-4"><strong>R${{$category->price}}</strong></p> -->
            <!-- <a href="/cart" class="btn btn-primary w-50 mt-4 p-4">Comprar</a> -->
        </div>
    </div>
</div>
@endsection()