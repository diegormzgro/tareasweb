@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de productos de la coleccion</h1>
    </div>
</div>


<form action="{{ route('collections.show',$collection->id) }}" method="GET">
    @csrf
    
    

    <div class="form-group">
        <label>Ordenamiento por nombre</label>
            <select name="orden" class="form-control">
                
                    <option value="1">Ascendente nombre</option>
                    <option value="2">Descendente nombre</option>
                    <option value="3">Ascendente precio</option>
                    <option value="4">Descendente precio</option>
                    <option value="5">None</option>
                    
                
            </select>
    </div>
  
    
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Ordenar</button>
        </div>
    </div>
</form>


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
                            <td><a href="{{ route('products.edit',$product->id) }}" class="btn btn-danger">Drop</a></td>
                            </td>
                            


                        </tr>
                    @endforeach
        
        
            
            
            <tbody>
        </table>
    
    


    </div>

    

</div>

@endsection