@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de productos de la coleccion</h1>
    </div>
</div>





<div class="pull-right box-tools">
                        <a class="btn btn-info btn-sm" href="{{ route('collections.products.create', ['collection' => $data['collection']]) }}">
                            Agregar nuevo producto
                        </a>
</div>





<div class="row">

    <div class="col">
        <table class="table">

        
        <theader>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Precio</th>
                    <th>Precio de descuento</th>
                    <th>Eliminar de la coleccion</th>
            

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
                            <td>
                            <td><a href="{{ route('collections.products.detach', ['collection' => $data['collection'], 'product' => $product]) }}" class="btn btn-danger">Drop1</a></td>
                            </td>
                            


                        </tr>
                    @endforeach
        
        
            
            
            <tbody>
        </table>
    
    


    </div>

    

</div>

@endsection