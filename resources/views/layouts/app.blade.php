<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Default')</title> 

    <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('fancybox/jquery.fancybox-v=2.1.5.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    
    <!-- Fonts -->
    
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
    <!-- Scripts -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
   
</head>

   <body style="overflow: hidden;">
        
        <div id="preloader">
            <div id="loader"></div>
        </div>
   
        <section>
  
        @include('flash::message')
        @include('layouts.partials.errors')
      
        @yield('content')
      
        </section>

        <footer>
		    <div class="container">
			    <div class="row">
				    <div class="col-md-12">
					    <ul class="social-icon">
                              <li><a href="#" class="fa icon-facebook"></a></li>
                              <li><a href="#" class="fa icon-twitter"></a></li>
                              <li><a href="#" class="fa icon-instagram"></a></li>
                        </ul>
					    <p class="wow bounceIn">Copyright 2016 &copy; HouseCreations
                        </p>
				    </div>
			    </div>
		    </div>
	    </footer>

    <!-- Scripts -->
     <script src="{{asset('js/jquery.js')}}"></script> 
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="f{{asset('fancybox/jquery.fancybox.pack-v=2.1.5.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script> 
    <script src="{{asset('js/jquery.sticky.js')}}"></script> 
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    
    
</body>
</html>
