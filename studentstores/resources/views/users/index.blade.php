@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de usuarios</h1>
    </div>
</div>


<div class="row">

    <div class="col">
        <table class="table">
            <theader>
                <th>Name</th>
                

            </theader>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            {{ $user->name}}
                        </td>
                        
                        
                        


                    </tr>
                @endforeach
            <tbody>
        </table>
    
    


    </div>

    

</div>

@endsection