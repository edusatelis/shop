@extends('layouts/main')

@section('title', $product->name)

@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="{{$product->image_path}}" class="img-fluid" alt="{{$product->name}}">
        </div>
        <div id="info-container" class="col-md-6 mt-4 p-4 py-4">
            <h1 class="mt-4 p-4">{{$product->name}}</h1>
            <p class="mt-4 p-4">{{$product->description}}</p>
            <p class="p-4"><strong>R${{$product->price}}</strong></p>
            <a href="/cart" class="btn btn-primary w-50 mt-4 p-4">Comprar</a>
        </div>
    </div>
</div>
@endsection()