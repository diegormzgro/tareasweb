@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Actualizar el producto</h1>
    </div>
</div>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="product[name]" value={{ $product->name }}>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="product[description]" value={{ $product->description }}>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Precio</label>
                <input type="text" class="form-control" name="product[price]" value={{ $product->price }}>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Precio de descuento</label>
                <input type="text" class="form-control" name="product[discount_price]" value={{ $product->discount_price }}>
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