@extends(Auth::user()->role == 'admin' ? 'layouts.adminTemplate' : (Auth::user()->role == 'manager' ? 'layouts.managerTemplate' : ''))

@section('content')
    <div class="container bg-white shadow p-5">
       
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="h3 text-danger">Les information du client</h4>
            <div>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-check-circle fa-sm text-white-50"></i> Conformé la commande</a>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-check-double fa-sm text-white-50"></i> Commande terminé</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user" style="font-size:1.4rem"></i></div>
                    </div>
                    <input type="text" class="form-control" style="background-color: transparent;color:black;font-weight:700" readonly value="{{$user->firstName . " " . $user->lastName}}"> 
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-phone-alt" style="font-size:1.4rem"></i></div>
                    </div>
                    <input type="text" class="form-control" style="background-color: transparent;color:black;font-weight:700" readonly value="{{$user->phone}}"> 
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-map-marker-alt" style="font-size:1.4rem"></i></div>
                    </div>
                    <input type="text" class="form-control" style="background-color: transparent;color:black;font-weight:700" readonly value="{{$client->addressOne}}"> 
                </div>
            </div>
        </div>
        <div class="row mt-3">
            @if (isset($client->addressTwo))
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-map-marker-alt" style="font-size:1.4rem"></i></div>
                        </div>
                        <input type="text" class="form-control" style="background-color: transparent;color:black;font-weight:700" readonly value="{{isset($client->addressTwo) ? $client->addressTwo : ''}}"> 
                    </div>
                </div>
            @endif
            
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-globe-africa" style="font-size:1.4rem"></i></div>
                    </div>
                    <input type="text" class="form-control" style="background-color: transparent;color:black;font-weight:700" readonly value="{{$client->commune}}"> 
                </div>
            </div>
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-globe-africa" style="font-size:1.4rem"></i></div>
                    </div>
                    <input type="text" class="form-control" style="background-color: transparent;color:black;font-weight:700" readonly value="{{$client->wilaya}}"> 
                </div>
            </div>
        </div>
        <h4 class="h3 text-danger mt-4 mb-3">Les produites commandé</h4>
        <div class="cart-table-warp">
            <table class="table" style="color:black;font-weight:700">
                <thead>
                    <tr>
                        <th class=""></th>
                        <th class="">Nom </th>
                        <th class="">Quantité</th>
                        <th class="">Prix Unitaire</th>
                        <th class="">Prix Totale</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr >
                            <td>
                                <img src="/storage/{{$product->mainImageUrl($product->id)}}" alt="" width="80px" height="70px">
                            </td>
                            <td class="align-self-center">
                                {{$product->name}}
                            </td>
                            <td></td>
                            <td> {{ number_format($product->price,2,'.',' ')}} DA</td>
                            <td> {{ number_format($product->price,2,'.',' ')}} DA</td>
                        </tr>
                    @endforeach
                    <tr >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> {{ number_format($totalPrice,2,'.',' ')}} DA</td>
                        <td> {{ number_format($totalPrice,2,'.',' ')}} DA</td>
                    </tr>
                </tbody>
        </table>
        </div>

    </div>
@endsection