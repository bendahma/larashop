@extends('layouts.clientTemplate');

@section('content')
    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Contact</h4>
            <div class="site-pagination">
                <a href=" {{url('/')}} ">Accueil</a> /
                <a href=" {{url('/contact')}} ">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->

    <!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
                    <h3>Vous Avez Des Question?</h3>
                    <br>
                    <h2> Contacter Nous Maintenant!</h2>
					<p>N°111 RUE XXX AIN TEMOUCHENT ALGERIA </p>
					<p>+213 6 66 93 01 03</p>
					<p>mkaddourbendahma@gmail.com</p>
					<div class="contact-social">
						<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
						<a href="#"><i class="fab fa-twitter fa-2x"></i></a>
						<a href="#"><i class="fab fa-dribbble fa-2x"></i></a>
						<a href="#"><i class="fab fa-behance fa-2x"></i></a>
                    </div>
                    
					<form class="contact-form" id="" method="POST" action=" {{ route('site.sendMessage') }} ">
						@csrf
						<input type="text" placeholder="Sujet" name="subject">
                        <textarea placeholder="Message" name="body"></textarea>
                        @if (Auth::user())
                            <button type="submit" class="site-btn">ENVOYER MESSAGE</button>
                        @else
                            <a href=" {{ route('login') }} " class="site-btn text-center"> Se Connecté pour envoyer un message </a>
                        @endif

					</form>
					<br><br>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
	</section>
	<!-- Contact section end -->
@endsection