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
                @foreach($products as $product)
                    <tr>
                        <td>
                            {{ $product->name}}
                        </td>
                        <td>
                            {{ $product->description}}
                        </td>
                        <td>
                            {{ $product->price}}
                        </td>
                        <td>
                            {{ $product->discount_price}}
                        </td>
                        


                    </tr>
                @endforeach
            <tbody>
        </table>
    
    


    </div>

    

</div>

<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="" role="button">Agregar productos al carrito</a>
    </div>
</div>

@endsection