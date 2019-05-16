@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo producto</h1>
    </div>
</div>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="product[name]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="product[description]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control" name="product[price]">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Precio de descuento</label>
                <input type="text" class="form-control" name="product[discount_price]">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Unidades disponibles en almacen</label>
                <input type="text" class="form-control" name="product[unidades]">
            </div>
        </div>
    </div>

<!--
    <div class="form-group">
        <label>Coleccion</label>
            <select name="product[collection_id]" class="form-control">
                @foreach ($data['collections'] as $collection)
                    <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                @endforeach
            </select>
    </div>
!-->
    
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection