@extends('layouts.clientTemplate');

@section('content')
    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <div class="site-pagination">
                <a href="{{ url('/') }}">Home</a> /
                <a href="  ">Product</a> /
                <a href="{{route('site.singleProduct',$product->id)}}">{{$product->name}}</a> 
            </div>
        </div>
    </div>

    <section class="product-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="">
						<img class="product-big-img" src="/storage/{{$product->mainImageUrl($product->id)}}" alt="">
					</div>
					{{-- <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="img/single-product/thumb-1.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/2.jpg"><img src="img/single-product/thumb-2.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/3.jpg"><img src="img/single-product/thumb-3.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="img/single-product/4.jpg"><img src="img/single-product/thumb-4.jpg" alt=""></div>
						</div>
					</div> --}}
				</div>
				<div class="col-lg-6 product-details">
					<h1 class="p-title"> {{$product->name}} </h1>
					<h3 class="p-price"> {{ number_format($product->price,2,'.',' ')}} DZD</h3>
					<h4 class="p-stock">Disponibilité: <span>Disponible</span></h4>
					{{-- <div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div> --}}
					{{-- <div class="p-review">
						<a href="">3 commentaire</a>|<a href="">Ajouter votre commentaire</a>
					</div> --}}
					<div class="fw-size-choose">
						<p>Couleur</p>
						@foreach ($product->colors as $color)
							<div class="sc-item">
								<input type="radio" name="sc" id="{{$color->color}}">
								<label for="{{$color->color}}" style="background-color: {{$color->color}} "></label>
							</div>
						@endforeach
						
					</div>
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
					</div>
					<div class="d-fles">
						@if(Auth::user())
							<a href="#" class="site-btn  bg-success">AJOUTER AU PANIER</a>
							<a href="#" class="site-btn">ACHETER MAINTENANT</a>
						@else
							<a href="{{route('login')}}" class="site-btn-white btn  btn-outline-success">Se connecté pour commande le produit</a>

						@endif
					</div>
					
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link text-danger active" data-toggle="collapse" data-target="#description" aria-expanded="true" aria-controls="description">
									Description
								</button>
							</div>
							<div id="description" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									{!! $product->description !!}
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link text-danger" data-toggle="collapse" data-target="#configuartion" aria-expanded="false" aria-controls="configuartion">
									Configuration 
								</button>
							</div>
							<div id="configuartion" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body mb-2">
									<ul class="list-group list-group-flush">
										<li class="list-group-item"> Date sorie : {{ $product->characteristic->ReleasedDate }} </li>
										<li class="list-group-item" > Network : {{ $product->characteristic->Network }} </li>
										<li class="list-group-item" > Dimensions : {{ $product->characteristic->Dimensions  }} </li>
										<li class="list-group-item" > Display Size : {{ $product->characteristic->DisplaySize }} </li>
										<li class="list-group-item" > Display Resolution : {{ $product->characteristic->DisplayResolution  }} </li>
										<li class="list-group-item" > OS : {{ $product->characteristic->OS  }} </li>
										<li class="list-group-item" > CPU : {{ $product->characteristic->CPU  }} </li>
										<li class="list-group-item" > GPU : {{ $product->characteristic->GPU  }} </li>
										<li class="list-group-item" > Memory Card slot : {{ $product->characteristic->MemoryCardslot  }} </li>
										<li class="list-group-item" > ROM : {{ $product->characteristic->MemoryInternal  }} </li>
										<li class="list-group-item" > RAM : {{ $product->characteristic->MemoryInternal  }} </li>
										<li class="list-group-item" > Back Camera : {{ $product->characteristic->MainCamera  }} </li>
										<li class="list-group-item" > Selfie: {{ $product->characteristic->SelfierCamera  }} </li>
										<li class="list-group-item" > Sensors: {{ $product->characteristic->Sensors  }} </li>
										<li class="list-group-item" > Battery: {{ $product->characteristic->Battery  }} </li>
									</ul>
								</div>
							</div>

							
						</div>
						{{-- <div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div> --}}
					</div>

					

					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- Page info end -->
@endsection