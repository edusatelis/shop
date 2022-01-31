@extends('layouts/main')

@section('title', 'Home')

@section('content')
<div id="search-container" class="col-md-12 bg">
       <h1 class="text-center p-4">Busque um produto</h1>

       <form action="">
           <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
       </form>

   </div>
   <div id="products-container" class="col-md-12">
       <div id="cards-container" class="row">
           @foreach($products as $product)
            <div class="card col-md-3">
                <img src="{{$product->image_path}}">
                <div class="card-body">
                   <h5 class="card-title">{{$product->name}}</h5>
                   <p class="card-description">{{$product->description}}</p>
                   <p class="card-price ">
                       <strong>

                           R$ {{$product->price}}
                        </strong>
                    </p>
                    <a href="/products/{{$product->id}}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
            @endforeach()
       </div>
   </div>
@endsection()