@extends('layouts.adminTemplate')

@section('content')

    <div class="card card-default">
        <div class="card-header mb-0 pb-0">
            <h6  style="font-weight: 700; color:black">{{isset($category) ? 'Edit' : 'Add New'}} Category</h6>
        </div>
        <div class="card-body">
            <form action="{{isset($category) ? route('category.update',$category->id) : route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($category))
                    @method('PATCH')
                @endif
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="Category name" name="name" value="{{isset($category) ? $category->name : ''}}">
                            @error('name')
                                <div class="" style="color:red;font-size:0.8rem;font-weight:700">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="submit" value="{{isset($category) ? 'Update' : 'Add New'}} Category" class="btn btn-success btn-block">
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

@endsection