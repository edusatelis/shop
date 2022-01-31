@extends('layouts/main')

@section('title', 'Categorias')

@section('content')

    <div class="row" id="category">
    @foreach($categories as $category)
    @if($category->id_category == 0)
        <div class="card col-md-4 p-4">
            <img src="/img/bg.jpg">
            <div class="
            ">
                <h5 class="card-title">{{$category->name}}</h5>
                <a href="#" class="btn btn-primary w-100">Saber Mais</a>
            </div>
        </div>
    @endif()
    @endforeach()
    </div>
@endsection()

