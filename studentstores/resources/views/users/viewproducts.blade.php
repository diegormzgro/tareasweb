@extends('layouts.second')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de productos</h1>
    </div>
</div>


<div class="row">

    <div class="col">
        <table class="table">
            <theader>
                <th>Name</th>
                <th>Description</th>
                <th>Precio</th>
                <th>Precio de descuento</th>
                <th>Edit</th>
                <th>Delete</th>

            </theader>
            <tbody>
                
            <tbody>
        </table>
    
    


    </div>

    

</div>

<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="" role="button">Agregar  productos al carrito</a>
    </div>
</div>

<div class="container products">
 
        <div class="row">
            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                            <p><strong>Price: </strong> 567.7$</p>
                            <p class="btn-holder"><a href="#" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->
 
    </div>

@endsection