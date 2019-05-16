@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de productos</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('products.create') }}" role="button">Agregar un producto</a>
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
                        <td><a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>


                    </tr>
                @endforeach
            <tbody>
        </table>
    
    


    </div>

    

</div>





@endsection