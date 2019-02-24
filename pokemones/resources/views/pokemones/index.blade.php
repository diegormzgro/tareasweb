@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de pokemones</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('pokemones.create') }}" role="button">Agregar un pokemon</a>
    </div>
</div>

<div class="row">

    <div class="col">
        <table class="table">
            <theader>
                <th>Name</th>
                <th>Category</th>
                <th>Type</th>
                <th>Edit</th>
                <th>Delete</th>

            </theader>
            <tbody>
                @foreach($pokemones as $pokemon)
                    <tr>
                        <td>
                            {{ $pokemon->name}}
                        </td>
                        <td>
                            {{ $pokemon->category}}
                        </td>
                        <td>
                            {{ $pokemon->type}}
                        </td>
                        <td><a href="{{ route('pokemones.edit',$pokemon->name) }}" class="btn btn-primary">Edit</a></td>
                        


                    </tr>
                @endforeach
            <tbody>
        </table>
    
    


    </div>

    

</div>

@endsection