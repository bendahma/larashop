@extends(Auth::user()->role == 'admin' ? 'layouts.adminTemplate' : (Auth::user()->role == 'manager' ? 'layouts.managerTemplate' : ''))

@section('content')
    <div class="container">
       
        <h4>Le client</h4>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" style="background-color: transparent" readonly value="{{$user->firstName . " " . $user->lastName}}"> 
            </div>
            <div class="col">
                <input type="text" class="form-control" style="background-color: transparent" readonly value="{{$user->phone}}"> 
            </div>
            <div class="col">
                <input type="text" class="form-control" style="background-color: transparent" readonly value="{{$user->phone}}"> 
            </div>
        </div>
    </div>
@endsection