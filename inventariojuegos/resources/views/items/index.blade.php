@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de items</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('items.create') }}" role="button">Agregar un item</a>
    </div>
</div>

<div class="row">

    <div class="col">
        <table class="table">
            <theader>
                <th>Name</th>
                <th>Tipo</th>
                

            </theader>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>
                            {{ $item->name}}
                        </td>
                        <td>
                            {{ $item->type}}
                        </td>

                    </tr>
                @endforeach
            <tbody>
        </table>
    
    


    </div>

    

</div>

@endsection