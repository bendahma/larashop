@extends(Auth::user()->role == 'admin' ? 'layouts.adminTemplate' : (Auth::user()->role == 'manager' ? 'layouts.managerTemplate' : ''))

@section('content')
    <div class="container">
        <div class="card card-success">
            <div class="card-header">
                <h4 class="text-dark">Products</h4>
            </div>
            <div class="card-body">
                <table class="table" id="Table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Name</th>
                            <th>Mark</th>
                            <th>Catgeory</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->mark}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src="/storage/{{$product->mainImageUrl($product->id)}}" alt="" width="80px"></td>
                                <td>
                                    <select name="" id="" class="custom-select" onchange="window.location.href=this.value;">
                                        <option selected disabled>Action</option>
                                        <option value="{{url('/backoffice/product/'.$product->id)}}">Details</option>
                                        <option value="{{url('/backoffice/product/'.$product->id.'/edit')}}">Edit</option>
                                        <option value="{{url('/backoffice/product/remove/'.$product->id)}}">Remove</option>
                                        <option value="{{url('/backoffice/product/delete/'.$product->id)}}">Delete</option>
                                    </select>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection