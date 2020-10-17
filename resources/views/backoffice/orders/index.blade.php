@extends(Auth::user()->role == 'admin' ? 'layouts.adminTemplate' : (Auth::user()->role == 'manager' ? 'layouts.managerTemplate' : ''))

@section('content')
    <div class="container">
        <div class="card card-success">
            <div class="card-header">
                <h4 class="text-dark">Les commandes</h4>
            </div>
            <div class="card-body">
                <table class="table" id="Table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Confirmé</th>
                            <th>Date commande</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $key => $order)
                            <tr style="font-size:1rem;font-weight:700;color:white;background-color:{{$order->orderComplet ? 'lightgreen' : 'rgb(255, 47, 47)' }} ">
                                <td> {{$key = $key + 1}} </td>
                                <td> {{$order->orderComplet == 0 ? 'Non' : 'Oui'}} </td>
                                <td> {{$order->OrderDate}} </td>
                                <td>
                                    <a href=" {{route('order.show',$order->id)}} " class="btn btn-success btn-block">Details</a> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection