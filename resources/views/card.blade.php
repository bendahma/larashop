@extends('layouts.clientTemplate');


@section('content')
    <!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Votre Panier</h4>
			<div class="site-pagination">
				<a href="">Accueil</a> /
				<a href="">Votre Panier</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Votre panier</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th></th>
									<th class="product-th"></th>
									{{-- <th class="quy-th">Quantité</th> --}}
									<th class="total-th"></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($items as $item)
									<tr>
										<td>
											<form action=" {{route('card.destroy',$item->id)}}" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit"><i class="fas fa-trash text-danger" ></i></button> 
											</form> 
										</td>
										<td class="product-col">
											<img src="/storage/{{$product->mainImageUrl($item->product->id)}}" alt="">
											<div class="pc-title">
												<h4>{{$item->product->name}}</h4>
												<p> <span id="productPrice">{{number_format($item->product->price,2,'.',' ')}}</span> DA</p>
											</div>
										</td>
										{{-- <td class="quy-col">
											<div class="quantity">
												<div class="pro-qty">
													<input type="text" value="1"  class="productQtt" 
													onchange="totalPrice({{$item->product->price}},{{$item->product->id}})">
												</div>
											</div>
										</td> --}}
										<td class="total-col">
											<h4 id="totalPriceProduct{{$item->product->id}}">
												{{number_format($item->product->price,2,'.',' ')}} DA
											</h4>
										</td>
									</tr>
								@endforeach
								
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Somme totale <span>{{number_format($totalPrice,2,'.',' ')}} DA </span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Entre code de promotion">
						<button>Submit</button>
					</form>
					<a href="" class="site-btn">Acheté Maintenant</a>
					<a href="/" class="site-btn sb-dark">Contenue Shopping</a>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
			totalPrice(price,id);
			
		});
		function totalPrice(price,id){
			console.log(price);
		}
	</script>
@endsection