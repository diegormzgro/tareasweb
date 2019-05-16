@extends('layouts.second')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de productos</h1>
    </div>
</div>

<div class="container products">
 
        <div class="row">
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ $product->description}}</p>
                            <p><strong>Price: </strong> {{ $product->price }}</p>
                            <p class="btn-holder"><a href="{{route('products.add-to-cart', $product->id)}}"  class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->
 
</div>

<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('products.cart') }}" role="button">view cart</a>
    </div>
</div>

@endsection