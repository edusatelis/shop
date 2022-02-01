@extends('layouts/main')

@section('title', 'Produtos')

@section('content')
   <div id="products-container" class="col-md-12">
       <div id="cards-container" class="row">
           @foreach($products as $product)
            <div class="card col-md-3">
                <img src="{{$product->image_path}}">
                <div class="card-body">
                   <h5 class="card-title">{{$product->name}}</h5>
                   <p class="card-description">{{$product->description}}</p>
                   <p class="card-price">{{$product->price}}</p>
                   
                   <a href="/products/{{$product->id}}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
            @endforeach()
       </div>
   </div>
@endsection()