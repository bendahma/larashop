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
                        <label for="" class="text-danger" style="font-weight: 700">Product features</label>
                        <div class="row">
                            <div class="col-lg-2">
                                <span class="">Released Date</span>
                            </div>
                            <div class="col-lg-4">      
                                    <input type="date" class="form-control" name="ReleasedDate">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Network</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="Network">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Dimensions</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="Dimensions">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">DisplaySize</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="DisplaySize">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">DisplayResolution</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="DisplayResolution">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Operating System</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="OS">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">C P U</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="CPU">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">G P U</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="GPU">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Memory Card slot</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="MemoryCardslot">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Memory Internal</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="MemoryInternal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Ram</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="MemoryRam">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Main Camera</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="MainCamera">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Selfier Camera</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="SelfierCamera">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Sensors</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="Sensors">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <span class="">Battery</span>
                    </div>
                    <div class="col-lg-4">      
                            <input type="text" class="form-control" name="Battery">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="" class="text-danger mb-0" style="font-weight: 700">Colors</label><br/>
                            <small>Chose phone color (Or multiple colors) </small>
                            <select name="colors[]" id="" multiple class="custom-select">
                                @foreach ($colors as $color)
                                    <option value=" {{$color->id}}" style="background-color: {{$color->color }}; height:2rem;" class="my-2 "></option>
                                @endforeach
                            </select>
                            
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