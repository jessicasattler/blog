<!DOCTYPE html>
<html>
<head>
		<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T9RQ8JQ');</script>
	<!-- End Google Tag Manager -->
	<title>@yield('title')</title>
	 {{-- Google Font --}}
	 {{-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> --}}
	 {{-- <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> --}}
	 {{-- Minified Bootstrap --}}
	 {{-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"> --}}
	 {{-- Main CSS  --}}
	{{-- <link rel="stylesheet" type="text/css" href="/css/main.css"> --}}


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- Google Font --}}
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   {{-- Main CSS  --}}
	<link rel="stylesheet" type="text/css" href="/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
		<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T9RQ8JQ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!-- As a link -->
	<div class="container">

	
		
		<span id="signUpForm"><a href="#signUp" class="login">Sign Up</a></span>
		{{-- <button class="btn btn-default col-xs-offset-2"><span id="signUp" class="in">Sign Up</span></button> --}}


		<span id="loginForm"><a href="#login" class="right login">Log In</a></span>
		{{-- <button class="btn btn-default col-xs-offset-4 col-sm-offset-6"><span id="login" class="in">Login</span></button> --}}

		
		
	</div>
	@yield('content')
</body>
</html>