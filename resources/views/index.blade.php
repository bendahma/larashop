@extends('layouts.clientTemplate');

@section('content')
	<!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
                <div class="hs-item set-bg" data-setbg=" {{asset('img/samsungCollection.jpg')}} ">
                
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 text-dark">
                                <h2 style="background-color: rgba(238, 245, 238, 0.712) ;padding:2rem 0">The Galaxy <br/> Collection</h2>
                                <a href="{{route('site.GetProductByMark','samsung')}}" class="site-btn sb-line">découvrir</a>
                            </div>
                        </div>
                        {{-- <div class="offer-card text-white">
                            <span>from</span>
                            <h2>$29</h2>
                            <p>SHOP NOW</p>
                        </div> --}}
                    </div>

                </div>
                <div class="hs-item set-bg" data-setbg="{{asset('img/huaweiCollection.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 text-dark">
                                <h2 style="background-color: rgba(238, 245, 238, 0.712) ;padding:2rem 0">Huawei <br/> Collection</h2>
                                <a href="{{route('site.GetProductByMark','huawei')}}" class="site-btn sb-line">découvrir</a>
                            </div>
                        </div>
                        {{-- <div class="offer-card text-white">
                            <span>from</span>
                            <h2>$29</h2>
                            <p>SHOP NOW</p>
                        </div> --}}
                    </div>

                </div>
                <div class="hs-item set-bg" data-setbg="{{asset('img/oppoCollection.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 text-dark">
                                <h2 style="">OPPO <br/> phones</h2>
                                <a href="{{route('site.GetProductByMark','oppo')}}" class="site-btn sb-line">découvrir</a>
                            </div>
                        </div>
                        {{-- <div class="offer-card text-white">
                            <span>from</span>
                            <h2>$29</h2>
                            <p>SHOP NOW</p>
                        </div> --}}
                    </div>

                </div>
                {{-- <div class="hs-item set-bg" data-setbg="{{asset('img/appleCollection.jpg')}}"></div>             --}}
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    
    <!-- Features section -->
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <i class="fas fa-dollar-sign fa-2x" style="color: black"></i>
                        </div>
                        <h2>PRIX IMBATTABLE</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <i class="fas fa-check fa-2x" style="color: white"></i>
                        </div>
                        <h2>PRODUIT ORIGINAL</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast fa-2x" style="color: black"></i>
                        </div>
                        <h2>LIVRAISON RAPIDE </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- letest product section -->
    <section class="top-letest-product-section" id="letest">
        <div class="container">
            <div class="section-title">
                <h2>DERNIER PRODUITS</h2>
            </div>
            <div class="product-slider owl-carousel">
                @foreach ($latestProducts as $latest)
                    <div class="product-item">
                        <a href="{{route('site.singleProduct',$latest->id)}}">
                            <div class="pi-pic">
                                <img src="/storage/{{$latest->mainImageUrl($latest->id)}}" alt="" height="250vh"  style="object-fit:contain">
                        </a>        
                        <div class="pi-links">
                            <button class="add-card" onclick="addToCart({{$latest->id}})"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></button>
                            <button class="wishlist-btn" onclick="likeProduct({{$latest->id}})">
                                <i class="far fa-heart text-danger likee"></i></button>
                        </div>
                        <a href="{{route('site.singleProduct',$latest->id)}}">        
                            </div>
                            <div class="pi-text">
                                    <h6>{{number_format($latest->price,2,'.',' ')}} DA</h6>
                                    <p>{{$latest->name}}</p>                            
                            </div>
                        </a>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>

    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>NOS PRODUITES</h2>
            </div>
            {{-- <ul class="product-filter-menu">
                <li><a href="#">TOPS</a></li>
                <li><a href="#">JUMPSUITS</a></li>
                <li><a href="#">LINGERIE</a></li>
                <li><a href="#">JEANS</a></li>
                <li><a href="#">DRESSES</a></li>
                <li><a href="#">COATS</a></li>
                <li><a href="#">JUMPERS</a></li>
                <li><a href="#">LEGGINGS</a></li>
            </ul> --}}
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-6 mb-4  p-2 py-4 shadow-sm" >
                        <a href=" {{route('site.singleProduct',$product->id)}} ">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/storage/{{$product->mainImageUrl($product->id)}}" alt="" height="250vh"  style="object-fit:contain">
                        </a>
                        
                                    <div class="pi-links">
                                        <button class="add-card" onclick="addToCart({{$product->id}})"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></button>
                                        <button class="wishlist-btn" onclick="likeProduct({{$product->id}})"><i class="far fa-heart text-danger likee" ></i></button>
                                    </div>
                     </div>
                        <a href=" {{route('site.singleProduct',$product->id)}} ">
                                <div class="pi-text px-2">
                                        <h6>{{number_format($product->price,2,'.',' ')}} DA</h6>
                                        <p>{{$product->name}}</p>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
            <div class="text-center pt-5">
                {{ $products->links() }}
            </div>
        </div>
    </section>
@endsection

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
                }
            });
            likeProduct(id);
            addToCart(id);
        });

        function likeProduct(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
                }
            });
            
            $.ajax({
                url:"/like/" + id,
                method:"POST",
                data: "",
                success:function(){
                    $(".likee").click(function(){
                        $(this).removeClass("far fa-heart").addClass("fas fa-heart");
                    });
                }
            });

            
        }

        function addToCart(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
                }
            });
            $.ajax({
                url:"/card/addToCart/" + id,
                method:"POST",
                success: function(response) {
                    swal(
                    response.message,
                    "",
                    response.success,
                    )
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.status === 401) {
                        swal(
                        "CONNECTE ou CREER UN COMPTE pour ajouté le produit au panier",
                        "",
                        "error"
                        )
                    } 
                },
            });
            $.ajax({
                url:"/card/countItem",
                method:"GET",
                data: "",
                success:function(response){
                    document.getElementById('cardItemCount').innerHTML = response.cardItemsCount;
		    }
	});

            
        }
    </script>
    
@endsection