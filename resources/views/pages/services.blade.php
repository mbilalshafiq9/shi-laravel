@extends('master')

@section('content')

<div class="main-container">
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="./public/img/hero3.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<span class="text-white alt-font">Consultancy, construction &amp; business development</span>
							<h1 class="text-white">Our Services</h1>
							<p class="text-white lead">Learn why we're the best at what we do<br>and why we're regarded as one of the best<br>in the GCC region.</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section class="duplicatable-content">
				<div class="container">
				
				@include('partials/_services')
				
				</div><!--end of container-->
			</section>
		
			<section class="image-divider overlay duplicatable-content">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="./public/img/hero13.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2 text-center">
							<span class="text-white alt-font">Check this out</span>
							<h1 class="text-white">Our Process</h1>
						</div>
					</div><!--end of row-->
					
					<div class="row">
						<div class="col-sm-4">
							<div class="feature feature-icon-large">
								<i class="text-white icon icon-notebook"></i>
								<h5 class="text-white">Research</h5>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="feature feature-icon-large">
								<i class="text-white icon icon-genius"></i>
								<h5 class="text-white">Develop</h5>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="feature feature-icon-large">
								<i class="text-white icon icon-gift"></i>
								<h5 class="text-white">Deliver</h5>
						
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>

@endsection