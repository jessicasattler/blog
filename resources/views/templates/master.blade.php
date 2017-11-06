<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	 {{-- Minified Bootstrap --}}
	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	 {{-- Main CSS  --}}
	<link rel="stylesheet" type="text/css" href="/css/main.css">

</head>
<body>
	@yield('content')
</body>
</html>