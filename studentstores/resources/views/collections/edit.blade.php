@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Editar la coleccion</h1>
    </div>
</div>
<form action="{{ route('collections.update', $collection->id) }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="collection[name]" value={{ $collection->name }}>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="collection[description]" value={{ $collection->description }}>
            </div>
        </div>
    </div>
  
    
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endsection