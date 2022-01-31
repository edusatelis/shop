@extends('layouts/main')

@section('title', 'Carrinho de Compras')

@section('content')
<div class="container">
    <ul class="list-group">
        @foreach($products as $product)
        <li  class="list-group-item" style="height: 200px">
        <div class="row">
        <div class="col-md-6">
            <img src="{{$product->image_path}}" class="img-thumbnail" style="max-height: 100px" alt="ERVA">
        </div>
        <div class="col-md-6">
            <p><strong> Pedido:</strong>{{$product->id}}  &nbsp&nbsp<strong> Data Pedido:</strong>01/02/2022</p>
            <p><strong>Preço: R$ {{$product->price}}</strong></p>
            <a href="" class="btn btn-danger">Remover</a>
        </div>
        </div>

        </li>
        @endforeach()
    </ul>
    <div class="row p-4 mt-2">
        <div class="col-md-6">

            <a href="" class="btn btn-primary w-100">Continuar Comprando</a>
        </div>
        <div class="col-md-6">
            <a href="" class="btn btn-success w-100">Comprar</a>

        </div>


    </div>

</div>

<!-- 
<div class="container">
<div class="row">
        <div id="image-container" class="col-md-6">
            <h1> Carrinho de Compras</h1>
            <img src="/img/erva_mate.jpg" class="img-fluid" alt="ERVA">
        </div>
        <div class="col-md-6">


        </div>
</div>
        <div id="info-container" class="col-md-6 mt-4 p-4 py-4">
            <div class="row">

            </div>
        </div>
</div> -->



@endsection()