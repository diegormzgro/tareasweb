@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de productos de la coleccion</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('products.create') }}" role="button">Comprar productos de la coleccion</a>
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
                

            </theader>
            <tbody>
                @foreach($collection->products as $product)
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

@endsection