@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear tu carrito de compras</h1>
    </div>
</div>
<form action="{{ route('collections.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="collection[name]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="collection[description]">
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