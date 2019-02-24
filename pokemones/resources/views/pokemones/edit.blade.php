@extends('layouts.main')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit 
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('pokemones.update', $pokemon->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Pokemon Name:</label>
          <input type="text" class="form-control" name="pokemon_name" value={{ $pokemon->pokemon_name }} />
        </div>
        <div class="form-group">
          <label for="price">Pokemon Category:</label>
          <input type="text" class="form-control" name="pokemon_category" value={{ $pokemon->pokemon_category }} />
        </div>
        <div class="form-group">
          <label for="quantity">Pokemon Type:</label>
          <input type="text" class="form-control" name="pokemon_type" value={{ $pokemon->pokemon_type }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>

@endsection