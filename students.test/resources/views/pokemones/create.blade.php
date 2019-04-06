@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo pokemon</h1>
    </div>
</div>
<form action="{{ route('pokemones.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="pokemon[pokemon_name]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="pokemon[pokemon_category]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" name="pokemon[pokemon_type]">
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