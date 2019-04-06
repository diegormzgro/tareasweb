@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un digimon</h1>
    </div>
</div>
<form action="{{ route('digimons.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="digimon[name]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Tipo</label>
                <input type="text" class="form-control" name="digimon[type]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nivel</label>
                <input type="text" class="form-control" name="digimon[level]">
            </div>
        </div>
    </div>

    
  
    
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection