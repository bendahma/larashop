@extends(Auth::user()->role == 'admin' ? 'layouts.adminTemplate' : (Auth::user()->role == 'manager' ? 'layouts.managerTemplate' : ''))

@section('content')

    <div class="card card-default">
        <div class="card-header mb-0 pb-0">
            <h6  style="font-weight: 700; color:black">{{isset($product) ? 'Edit' : 'Add New'}} Category</h6>
        </div>
        <div class="card-body">
            <form action="{{isset($product) ? route('product.update',$product->id) : route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($product))
                    @method('PATCH')
                @endif
               <div class="row">
                   <div class="col">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Product name" name="name" >
                            @error('name')
                                <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                            @enderror
                        </div>
                   </div>
                   <div class="col">
                    <div class="form-group">
                        <input type="text" class="form-control" id="mark" placeholder="Product mark" name="mark" >
                        @error('mark')
                            <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                        @enderror
                    </div>
                   </div>
                   <div class="col">
                    <div class="form-group">
                        <input type="text" class="form-control" id="mark" placeholder="Product price in DZD" name="price" >
                        @error('price')
                            <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                        @enderror
                    </div>
                   </div>
               </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="short description" name="description" rows="5" ></textarea>
                            @error('price')
                                <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Product details" name="details" rows="5" ></textarea>
                            @error('price')
                                <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="">Product Main image</label>
                            <input type="file" class="form-control" name="image" placeholder="Main image">
                        </div>
                    </div>
                </div>
               <div class="row">
                   <div class="col-lg-2">
                        <div class="form-group">
                            <input type="submit" value="{{isset($product) ? 'Update' : 'Add New'}} Product" class="btn btn-success btn-block">
                        </div>    
                   </div>
               </div>
            </form>
        </div>
    </div>

@endsection