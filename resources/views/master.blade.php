<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
	<head>
	    <meta charset="utf-8">
	    
	    <title>SILVERHAWK TMA INTERNATIONAL</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link href="{{asset('css/flexslider.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
	    <link href="{{asset('css/line-icons.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
	    <link href="{{asset('css/elegant-icons.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
	    <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
	    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
	    <link href="{{asset('css/theme-shi.css')}}" rel="stylesheet" type="text/css" media="all"/>
	    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" media="all"/>
	    <!--[if gte IE 9]>
	    	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
			<![endif]-->
	    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
	    <script src="{{asset('js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    </head>
	<body ng-app="silverApp">

		<div class="loader">
  		<div class="spinner">
		  	<img src="{{asset('img/rings.svg')}}">
			</div>
  	</div>

  	<div class="nav-container">
			<nav class="top-bar overlay-bar">
				<div class="container">
				
					<div class="row utility-menu">
						<div class="col-sm-12">
							<div class="utility-inner clearfix">
								<span class="alt-font"><i class="icon icon_pin"></i> P.O. Box 16638, Office No. 604, Doha, State of Qatar</span>
								<span class="alt-font"><i class="icon icon_mail"></i>  info@shi.qa</span>
							</div>
						</div>
					</div><!--end of row-->
				
				
					<div class="row nav-menu">
						<div class="col-sm-3 col-md-2 columns">
							<a href="/">
								<img class="logo logo-light" alt="Logo" src="http://shi.qa/public/img/shi-tma.png">
								<img class="logo logo-dark" alt="Logo" src="http://shi.qa/public/img/shi-tma.png">
							</a>
						</div>
					
						<div class="col-sm-9 col-md-10 columns">
							<ul class="menu">
								<li><a href="/">Home</a></li>
								<li><a href="/about">About</a></li>
								<li><a href="/services">Services</a></li>
								<li><a href="/projects">Projects</a></li>
							</ul>

							<ul class="social-icons text-right">
								<li>
									<a href="">
										<i class="icon social_twitter"></i>
									</a>
								</li>
							
								<li>
									<a href="https://www.facebook.com/Silverhawk.International/" target="_blank">
										<i class="icon social_facebook"></i>
									</a>
								</li>
							
								<li>
									<a href="#">
										<i class="icon social_linkedin"></i>
									</a>
								</li>
							</ul>
						</div>
					</div><!--end of row-->
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div><!--end of container-->
			</nav>
		
		</div>
		
		<div ng-controller="MainCtrl">@yield('content')</div>
		
		<div class="footer-container">
			<footer class="bg-primary short-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<span class="text-white">&copy; {{date('Y')}} SILVERHAWK Inc.</span>
							<span class="text-white"><a href="#">info@shi.qa</a></span>
							<span class="text-white">+974 4001 2688</span>
							<span class="text-white">Doha, State of Qatar</span>
						</div>
					</div><!--end for row-->
				</div><!--end of container-->
				
				<div class="contact-action">
					<div class="align-vertical">
						<i class="icon text-white icon_mail"></i>
						<a href="mailto:info@shi.qa?subject=Information" class="text-white"><span class="text-white">Get in touch with us <i class="icon arrow_right"></i></span></a>
					</div>
				</div>
			</footer>
		</div>		
		<script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('js/skrollr.min.js')}}"></script>
    <script src="{{asset('js/spectragram.min.js')}}"></script>
    <script src="{{asset('js/scrollReveal.min.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/twitterFetcher_v10_min.js')}}"></script>
    <script src="{{asset('js/lightbox.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
	</body>
</html>