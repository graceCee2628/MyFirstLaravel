<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>::My First Project::</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc/navbar')


	<div class="container mt-5">
		@if(Request::is('/')) <!--to specify which content you want the showcase to be into-->
			@include('inc/showcase')
		@endif	
		<div class="row">


			<div class="col-md-8 col-lg-8">  <!--main main content-->
				@include('inc.errormessages')
				@yield('content')
			</div>

			<div class="col-md-4 col-lg-4"> <!--sidebar com dev-->
				@include('inc.sidebar')				
			</div>	
		</div>
	</div>
	<!--<footer id="footer" class="text-center">
		<p>Copyright 2020 &copy; MyProject</p>
	</footer>-->
</body>
</html>