@extends('master')

@section('content')

<div class="main-container">
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="http://www.asergeev.com/p/xl-2013-1185-05/pearl_qatar_livestock-boats_porto_arabia_pearl_qatar.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<!-- <img alt="logo" class="logo" src="http://shi.qa/public/./public/img/shi-tma.png"> -->
							<h1 class="text-white space-bottom-small">SILVERHAWK TMA INTERNATIONAL</h1>
							<h2 class="text-white space-bottom-medium">&ldquo;DONE RIGHT THE FIRST TIME!&rdquo;</h2>
							<a href="/services" class="btn btn-primary btn-white">Our Services</a>
							<a href="mailto:info@shi.qa" class="btn btn-primary btn-filled">Contact Us</a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section class="no-pad-bottom no-pad-top projects-gallery">
				
				<div class="projects-wrapper clearfix">
					
					<div class="projects-container">
						
						<div class="col-md-3 col-sm-6 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="http://www.workingtransitions.com/wp-content/uploads/2014/05/Contract-PNG.png">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h3 class="text-white"><strong>Business Setup &amp; Company Registration</strong></h3>
									<p class="text-white">
									
									</p>
									<a href="/services" class="btn btn-primary btn-white">See Related Services</a>
								</div>
							</div>
						</div><!--end of individual project-->
						
						<div class="col-md-3 col-sm-6 no-pad project branding image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="http://www.stirlinglloyd.com/media/1914/project-support.jpg">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h3 class="text-white"><strong>Business Development &amp; Project Support</strong></h3>
									<p class="text-white">
									
									</p>
									<a href="/services" class="btn btn-primary btn-white">See Related Services</a>
								</div>
							</div>
						</div><!--end of individual project-->
						
						<div class="col-md-3 col-sm-6 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="http://www.sensefinancial.com/wp-content/uploads/2012/01/RealEstate-IRA.jpg">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h3 class="text-white"><strong>Partnered Companies</strong></h3>
									<p class="text-white">
									
									</p>
									<a href="/services" class="btn btn-primary btn-white">See Related Services</a>
								</div>
							</div>
						</div><!--end of individual project-->

						<div class="col-md-3 col-sm-6 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="http://www.lawgisticpartners.com/files/lawgistics/images/legalsupport1.jpg">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h3 class="text-white"><strong>Legal Support &amp; Guidance</strong></h3>
									<p class="text-white">
									
									</p>
									<a href="/services" class="btn btn-primary btn-white">See Related Services</a>
								</div>
							</div>
						</div><!--end of individual project-->
					
					</div><!--end of projects-container-->
					
				</div><!--end of projects wrapper-->
				
			</section>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-left">
							<h1>OUR CORE</h1>
							<p>&ldquo; We have established ourselves as one of the most trusted and reliable company establishment, business development & project support services consultants in the GCC region.&rdquo;</p>
						</div>
					</div>
				</div>
			</section>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-left">
							<h1>ABOUT US</h1>
							<p>Silverhawk TMA International was founded in Qatar on 2008.</p>
							<p>We are a Business Development and Project Support Consultancy Firm with the focus to guide and assist Corporate Conglomerates and Independent SMEs, enter and establish their businesses within Qatar and the GCC region with confidence.</p>
							<p>We will also through our expert market knowledge with influential and resourceful contacts and projects database will provide a strategic partnership advantage to our clients� businesses that will achieve clearly defined results.</p>
							<p>Silverhawk TMA International is the premier business consultancy with a diversified reach in many sectors for international companies to join and capture the dynamic and growing Qatar economy. Our goal is to help Qatar reach its 2030 Vision with the support of world-class organizations within our group of companies to provide a sustainable flow of products and services.</p>
						</div>
					</div>
				</div>
			</section>
			
			<section class="duplicatable-content">
			
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-left">
							<h1>SERVICES</h1>
							<p>WE ARE THE COMPASS THAT CAN GUIDE YOU IN QATAR</p>
						</div>
					</div><!--end of row-->
					<br />
					@include('partials/_services')
				</div>
			
			</section>
			
			<section class="team-1">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1>About Our Team</h1>
						</div>
					</div><!--end of row-->
					
					<div class="row space-bottom-large">
						<div class="col-sm-4">
							<div class="team-1-member">
								<img alt="Team Member" src="./public/img/team-small-1.png ">
								<h2>ISAIAH SHAHRYAR</h2>
								<h5>Co Founder</h5>
								<p class="space-top-small">
								</p>
							</div><!--end of team member-->
						</div>
						
						<div class="col-sm-4">
							<div class="team-1-member">
								<img alt="Team Member" src="./public/img/elias.jpg">
								<h2>ELIAS SHAHRYAR</h2>
								<h5>Co Founder</h5>
								<p class="space-top-small">
								</p>
							</div><!--end of team member-->
						</div>
						
						<div class="col-sm-4">
							<div class="team-1-member">
								<img alt="Team Member" src="./public/img/james.jpg">
								<h2>JASON MORRIS</h2>
								<h5>Partner</h5>
								<p class="space-top-small">
								</p>
							</div><!--end of team member-->
						</div>
						
		
					</div><!--end of row-->
					
					<!--end of row-->
					
				</div><!--end of container-->
			</section>
			
			<section class="action-banner overlay">
			
				<div class="background-image-holder">
					<img class="background-image" alt="Background Image" src="./public/img/hero3.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<h1 class="text-white">I'm ready to start my business in Qatar. Where do I sign?</h1>
							<a href="mailto:info@shi.qa" class="btn btn-primary btn-white btn-lg btn-filled">Contact Us NOW!!!</a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
				
			</section>
		
		</div>

@endsection