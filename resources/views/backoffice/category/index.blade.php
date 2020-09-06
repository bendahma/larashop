@extends('layouts.adminTemplate');
@section('list')
    <div class="container">
        <h4>Categories</h4>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-lg-4"">
                    <img src="/storage/{{$category->image->url}}" alt="category image" class="img-responsive menu-thumbnails" width="100%" height="250vh">
                    <div class="d-flex justify-content-center" >
                        <div class="">
                            <a  href="" class="justify-content-center">
                                <h6 class="mt-2 h5"  >
                                    {{$category->name}} 
                                </h6>
                            </a>
                        </div>
                        <div class="mt-2 ml-3">
                            <a href="{{route('category.edit',$category->id)}}" style="color:blue;font-size:1rem"><i class="fas fa-pen"></i></a>
                        </div>
                        <div class="mt-2 justify-content-end">
                            <form action="{{route('category.destroy',$category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none;padding:0;background:none;outline:none;">
                                    <span class="mt-3 ml-3" style="color:red;font-size:1rem"><i class="fas fa-trash"></i></span>
                                </button>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection