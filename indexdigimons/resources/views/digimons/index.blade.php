@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de digimons</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('digimons.create') }}" role="button">Agregar un digimon</a>
    </div>
</div>

<div class="row">

    <div class="col">
        <table class="table">
            <theader>
                <th>Name</th>
                <th>Type</th>
                <th>Level</th>
               

            </theader>
            <tbody>
                @foreach($digimones as $digimon)
                    <tr>
                        <td>
                            {{ $digimon->name}}
                        </td>
                        <td>
                            {{ $digimon->type}}
                        </td>
                        <td>
                            {{ $digimon->level}}
                        </td>
                        


                    </tr>
                @endforeach
            <tbody>
        </table>
    
    


    </div>

    

</div>

@endsection