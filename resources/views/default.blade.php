<!DOCTYPE html>
<html lang="en-US">
<head>
	@include('includes.header')
</head>
<body>

<!-- Site Loader -->
<div class="site-loader"><img src="public/img/loader.gif" alt="Loading"></div>
<!-- Site Loader End -->

<!-- Site Back Top -->
<div class="site-back-top" title="Back to top"></div>
<!-- Site Back Top End -->

<!-- Site Background -->
<div class="site-background"></div>
<!-- Site Background End -->

<div class="site-container">
	<!-- Site Menu Button -->
	<button class="site-toggle" type="button"><i class="fa fa-bars"></i></button>
	<!-- Site Menu Button End -->
	
	<!-- Site Menu -->
	<div class="site-menu">
		@include('includes.menu')
	</div>
	<!-- Site Menu End -->
	
	<!-- Site Content -->
	<div class="site-wrapper">
		 @yield('content')
	</div>
	<!-- Site Content End -->
</div>

@include('includes.footer')

</body>
</html>