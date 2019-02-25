@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo Item</h1>
    </div>
</div>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="item[name]">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Type</label>
            <select name="item[type]" class="form-control">
                
                    <option value="fire">Fire</option>
                    <option value="water">Water</option>
                    <option value="normal">Normal</option>
                
            </select>
    </div>
  
    
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection