@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de trabajos</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('jobs.create') }}" role="button">Agregar un trabajo</a>
    </div>
</div>

<div class="row">

    <div class="col">
        <table class="table">
            <theader>
                <th>Name</th>
                <th>id</th>
                

            </theader>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>
                            {{ $job->name}}
                        </td>
                        <td>
                            {{ $job->id}}
                        </td>

                    </tr>
                @endforeach
            <tbody>
        </table>
    
    


    </div>

    

</div>

@endsection