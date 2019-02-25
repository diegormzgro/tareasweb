@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de jugadores</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('players.create') }}" role="button">Agregar un jugador</a>
    </div>
</div>

<div class="row">

    <div class="col">
        <table class="table">
            <theader>
                <th>Name</th>
                <th>Level</th>
                <th>Job</th>
                

            </theader>
            <tbody>
                @foreach($players as $player)
                    <tr>
                        <td>
                            {{ $player->name}}
                        </td>
                        <td>
                            {{ $player->level}}
                        </td>
                        <td>
                            {{ $player->job->name}}
                        </td>
                        
                        


                    </tr>
                @endforeach
            <tbody>
        </table>
    
    


    </div>

    

</div>

@endsection