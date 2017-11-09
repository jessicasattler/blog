<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	 {{-- Google Font --}}
	 {{-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> --}}
	 <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	 {{-- Minified Bootstrap --}}
	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	 {{-- Main CSS  --}}
	<link rel="stylesheet" type="text/css" href="/css/main.css">

</head>

<body>
	@yield('content')
</body>
</html>