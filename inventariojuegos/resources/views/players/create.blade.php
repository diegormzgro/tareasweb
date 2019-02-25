@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo Jugador</h1>
    </div>
</div>
<form action="{{ route('players.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="player[name]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nivel</label>
                <input type="text" class="form-control" name="player[level]">
            </div>
        </div>
    </div>
    

    <div class="form-group">
        <label>Coleccion</label>
            <select name="player[job_id]" class="form-control">
                @foreach ($data['jobs'] as $job)
                    <option value="{{ $job->id }}">{{ $job->name }}</option>
                @endforeach
            </select>
    </div>
  
    
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection