@extends('layouts/main')

@section('title', 'Produtos')

@section('content')
   <div id="products-container" class="col-md-12">
       <div id="cards-container" class="row">
           @foreach($products as $product)
           @foreach($descriptions as $description)
           @foreach($images as $image)

           @if($description->product_id == $product->id && $image->product_id == $product->id)
            <div class="card col-md-3">
                <img src="{{$image->image_path}}">
                <div class="card-body">
                   <h5 class="card-title">{{$product->name}}</h5>
                   <p class="card-description">{{$description->description}}</p>
                   <p class="card-price">{{$product->price}}</p>
                   
                   <a href="{{$product->id}}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
            @endif()
            @endforeach()
            @endforeach()
            @endforeach()

       </div>
   </div>
@endsection()