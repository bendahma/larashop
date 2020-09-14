@extends(Auth::user()->role == 'admin' ? 'layouts.adminTemplate' : (Auth::user()->role == 'manager' ? 'layouts.managerTemplate' : ''))

@section('content')

    <div class="card card-default">
        <div class="card-header mb-0 pb-0">
            <h5  style="font-weight: 700; color:black">{{isset($product) ? 'Edit' : 'Add New'}} Product</h5>
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
                            <label class="text-danger mb-0" style="font-weight: 700" for="">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Product name" name="name" value="{{ isset($product) ? $product->name : ''}}">
                            @error('name')
                                <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                            @enderror
                        </div>
                   </div>
                   <div class="col">
                    <div class="form-group">
                        <label for="" class="text-danger mb-0" style="font-weight: 700">Mark</label>
                        <input type="text" class="form-control" id="mark" placeholder="Product mark" name="mark" value="{{isset($product) ? $product->mark : ''}}">
                        @error('mark')
                            <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                        @enderror
                    </div>
                   </div>
                   <div class="col">
                    <div class="form-group">
                        <label for="" class="text-danger mb-0" style="font-weight: 700">Category</label>
                        <select name="category" id="" class="custom-select">
                            <option value="">Select category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if( isset($product) AND $product->category_id == $category->id) {{'selected'}} @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                   </div>
                   <div class="col">
                    <div class="form-group">
                        <label for="" class="text-danger mb-0" style="font-weight: 700">Price</label>
                        <input type="text" class="form-control" id="mark" placeholder="Product price in DZD" name="price" value="{{isset($product) ? $product->price : ''}}">
                        @error('price')
                            <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                        @enderror
                    </div>
                   </div>
               </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="text-danger mb-0" style="font-weight: 700">Description</label>
                            <textarea class="form-control summernote" placeholder="short description" name="description" rows="20" >{{isset($product) ? $product->description : ''}}</textarea>
                            @error('description')
                                <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="text-danger" style="font-weight: 700">Details</label>
                            <textarea class="form-control summernote" placeholder="Product details" name="details" rows="10" >{{isset($product) ? $product->details : ''}}</textarea>
                            @error('details')
                                <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="" class="text-danger" style="font-weight: 700">Product Main image</label>
                            <input type="file" class="form-control" name="mainImage" placeholder="Main image">
                            @error('image')
                                <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                            @enderror
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