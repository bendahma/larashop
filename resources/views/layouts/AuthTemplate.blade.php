<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @yield('pageTitle')
    
    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/thesaas.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

   
  </head>

  <body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url({{asset('img/login.jpg')}});">



    @yield('content')
    

    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/thesaas.min.js')}}"></script>
    <script src="{{asset('js/thesaas.script.js')}}"></script>

  </body>
</html>

