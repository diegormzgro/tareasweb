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





<div class="row">

    <div class="col">
        <table class="table">

        @if ($ordenamiento === "1")
                <theader>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Precio</th>
                    <th>Precio de descuento</th>
                    <th>Eliminar de la coleccion</th>
            

                </theader>
                <tbody>
                    @foreach($ascs as $asc)
                        <tr>
                            <td>
                                {{ $asc->name}}
                            </td>
                            <td>
                                {{ $asc->description}}
                            </td>
                            <td>
                                {{ $asc->price}}
                            </td>
                            <td>
                                {{ $asc->discount_price}}
                            </td>
                            <td>
                            <td><a href="{{ route('products.edit',$asc->id) }}" class="btn btn-danger">Drop</a></td>
                            </td>
                            


                        </tr>
                    @endforeach
        @elseif ($ordenamiento === "2")
                <theader>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Precio</th>
                    <th>Precio de descuento</th>
                    <th>Eliminar de la coleccion</th>
            

                </theader>
                <tbody>
                    @foreach($descs as $desc)
                        <tr>
                            <td>
                                {{ $desc->name}}
                            </td>
                            <td>
                                {{ $desc->description}}
                            </td>
                            <td>
                                {{ $desc->price}}
                            </td>
                            <td>
                                {{ $desc->discount_price}}
                            </td>
                            <td>
                            <td><a href="{{ route('products.edit',$desc->id) }}" class="btn btn-danger">Drop</a></td>
                            </td>
                            


                        </tr>
                    @endforeach
                    

        @elseif ($ordenamiento === "3")
                <theader>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Precio</th>
                    <th>Precio de descuento</th>
                    <th>Eliminar de la coleccion</th>
            

                </theader>
                <tbody>
                    @foreach($ascprecios as $ascprecio)
                        <tr>
                            <td>
                                {{ $ascprecio->name}}
                            </td>
                            <td>
                                {{ $ascprecio->description}}
                            </td>
                            <td>
                                {{ $ascprecio->price}}
                            </td>
                            <td>
                                {{ $ascprecio->discount_price}}
                            </td>
                            <td>
                            <td><a href="{{ route('products.edit',$ascprecio->id) }}" class="btn btn-danger">Drop</a></td>
                            </td>
                            


                        </tr>
                    @endforeach

        @elseif ($ordenamiento === "4")
                <theader>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Precio</th>
                    <th>Precio de descuento</th>
                    <th>Eliminar de la coleccion</th>
            

                </theader>
                <tbody>
                    @foreach($descprecios as $descprecio)
                        <tr>
                            <td>
                                {{ $descprecio->name}}
                            </td>
                            <td>
                                {{ $descprecio->description}}
                            </td>
                            <td>
                                {{ $descprecio->price}}
                            </td>
                            <td>
                                {{ $descprecio->discount_price}}
                            </td>
                            <td>
                            <td><a href="{{ route('products.edit',$descprecio->id) }}" class="btn btn-danger">Drop</a></td>
                            </td>
                            


                        </tr>
                    @endforeach

        @else
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
        @endif
        
            
            
            <tbody>
        </table>
    
    


    </div>

    

</div>

@endsection