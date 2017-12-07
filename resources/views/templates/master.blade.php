<!DOCTYPE html>
<html>
<head>
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
	<!-- As a link -->
	<div class="container">

		{{-- modal sample --}}
		<!-- Trigger the modal with a button -->
		{{-- <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign Up</button> --}}
		<span><a href="#" data-toggle="modal" data-target="#signUpModal" class="login">Sign Up</a></span>
		<!-- Modal -->
		<div id="signUpModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close registerOrSignUp" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Register</h4>
		      </div>
		      <div class="modal-body registerOrSignUp">
		        <p>Some text in the modal.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default registerOrSignUp" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>

		{{-- end of modal sample --}}
		{{-- <span><a href="#" class="right login">Log In</a></span> --}}

		{{-- modal sample --}}
		<!-- Trigger the modal with a button -->
		{{-- <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign Up</button> --}}
		<span><a href="#" data-toggle="modal" data-target="#logInModal" data-toggle="modal" data-target="#signUpModal" class="right login">Log In</a></span>
		<!-- Modal -->
		<div id="logInModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close registerOrSignUp" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Register</h4>
		      </div>
		      <div class="modal-body registerOrSignUp">
		        <p>Some text in the modal.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default logInModal" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>

		{{-- end of modal sample --}}
		
		
	</div>
	@yield('content')
</body>
</html>