@extends('layouts.second')

@section('content')
<div class="row">
    <div class="col">
        <h1>Introducir nombre</h1>
    </div>
</div>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="user[name]">
            </div>
        </div>
    </div>


    
  
    
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
    </div>
</form>
@endsection