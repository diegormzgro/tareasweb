@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de colecciones</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('collections.create') }}" role="button">Agregar una coleccion</a>
    </div>
</div>

<div class="row">

    <div class="col">
        <table class="table">
            <theader>
                <th>Name</th>
                <th>Description</th>
                <th>coleccion</th>
                <th>Detalle</th>
                
                <th>Edit</th>
                <th>Delete</th>

            </theader>
            <tbody>
                @foreach($collections as $collection)
                    <tr>
                        <td>
                            {{ $collection->name}}
                        </td>
                        <td>
                            {{ $collection->description}}
                        </td>
                        <td>
                            {{ $collection->products->count()}}
                        </td>
                        
                        <td><a href="{{ route('collections.show',$collection->id) }}" class="btn btn-primary">Detalle</a></td>
                        <td><a href="{{ route('collections.edit',$collection->id) }}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('collections.destroy', $collection->id)}}" method="post">
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