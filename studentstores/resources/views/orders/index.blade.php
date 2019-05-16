@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Reporte de ordenes</h1>
    </div>
</div>


<div class="row">

    <div class="col">
        <table class="table">
            <theader>
                <th>Pagada</th>
                <th>Total</th>
                <th>Fecha de compra</th>
                

            </theader>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>
                            @if($order->status == 1)
                                <p> Si </p>
                            @else
                                <p> No </p>
                            @endif
                        </td>
                        <td>
                            ${{ $order->total}} MXN
                        </td>
                        <td>
                            {{ $order->created_at}}
                        </td>
                        

                    </tr>
                @endforeach
            <tbody>
        </table>
    
    


    </div>

    

</div>





@endsection