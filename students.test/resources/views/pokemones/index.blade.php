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
                <th>Nombre</th>
                <th>Category</th>
                <th>Type</th>
            </theader>
            <tbody>
             
                    <tr>
                        <td>
                        Charmander
                        </td>
                        <td>
                         Lizard
                        </td>
                        <td>
                        Fire
                        </td>
                    </tr>
             
            </tbody>
        </table>
    </div>
</div>

@endsection