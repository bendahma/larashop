<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Larashop</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="Larashop, Laravel, eShop, eCommerce">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/app.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/fontawsome.css')}}"/>

	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

	

</head>
<body>
	<!-- Page Preloder -->
	{{-- <div id="preloder">
		<div class="loader"></div>
	</div> --}}

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="/" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Recherche un produit ....">
							<button> <span style="color:lightgray;font-size:1rem"><i class="fas fa-search mr-2"></i></span> </button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							@guest
								<div class="up-item my-auto">
									
									<a href="{{route('login')}}" class="my-auto"><i class="far fa-user-circle mr-1 mt-1" style="font-size: 1.1rem"></i> Se connecté</a> ou <a href="{{route('register')}}">S'inscrire</a>
								</div>
							@else
							<div class="up-item">
								<div class="nav-item dropdown">
									 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->firstName }} <span class="caret"></span>
									</a>
	
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a href=" {{route('dashboard')}} " class="dropdown-item" target="_blank">
											<span ><i class="fas fa-address-card" style="font-size: 0.9rem"></i></span>
											Profile
										</a>
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
											<span ><i class="fas fa-sign-out-alt" style="font-size: 0.9rem"></i></span> {{ __('Logout') }}
										</a>
	
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</div>
									
							</div>
						 
							@endguest
							
							<div class="up-item">
								
								<a href="{{route('card.index')}}" class="ml-2">
									<div class="shopping-card mr-2">
										<i class="fas fa-shopping-cart mr-2" style="font-size: 1.1rem"></i>
										<span class="mr-3"> 
											
											{{$cardItemsCount}} </span>
									</div>Panier</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li>
						<a href="/"><i class="fas fa-home" style="font-size: 1inderem;color:inheret"></i>
							Accueil
						</a>
					</li>
					@foreach ($categories as $category)
					<li>
						<a href="#">
							<i class="fab fa-apple" style="font-size: 1inderem;color:inheret"></i>
							{{$category->name}} 
							@if($category->new == 1) 
								<span class="new">New</span> 
							@endif
						</a>
					</li>
					
					@endforeach
					<li class="text-danger">
						<a href="/contact"><i class="far fa-comments" style="font-size: 1inderem;color:inheret"></i>
							Contact
						</a>
					</li>
					{{-- Sub-menu --}}
					{{-- <li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./product.html">Product Page</a></li>
							<li><a href="./category.html">Category Page</a></li>
							<li><a href="./cart.html">Cart Page</a></li>
							<li><a href="./checkout.html">Checkout Page</a></li>
							<li><a href="./contact.html">Contact Page</a></li>
						</ul>
					</li>
					<li><a href="#">Blog</a></li> --}}
				</ul>
			</div>
		</nav>
	</header>

	@yield('content')

	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>

	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fab fa-instagram"></i><span>instagram</span></a>
					<a href="" class="pinterest"><i class="fab fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fab fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fab fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fab fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fab fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
        <p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fas fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>

    {{-- Javascript Plugins --}}
    <section>
            <!--====== Javascripts & Jquery ======-->
            <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
            <script src="{{asset('js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
            <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
            <script src="{{asset('js/jquery-ui.min.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>
			<script src="{{asset('js/app.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
			@yield('scripts')

    </section>
	</body>
</html>

