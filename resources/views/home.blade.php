@extends('templates.master')

@section('title')
	Welcome Page
@stop
@section('content')
	
{{-- 	<div class="containerDiv">

		<div class="divStyleA col-sm-6 col-md-12">
			<text class="right">CONVERSATIONS</text>
			<img src="/images/conversationsTwo.jpg" placeholder="conversations">
		</div>
		<text id="across">ACROSS</text>
		<div class="divStyleA placeRight col-sm-offset-6 col-sm-6"> --}}
			{{-- <text>ACROSS</text> --}}
			{{-- <img src="/images/acrossTwo.jpg" placeholder="across">
		</div>
		<div class="divStyleA col-sm-6 col-md-12">
			<text class="right">TIME</text>
			<img src="/images/distanceTwo.jpg" placeholder="distance">
		</div> --}}{{-- 
		<text class="col-sm-12">AND DISTANCE</text>
		<div class="divStyleA col-sm-offset-6 col-sm-6 col-md-12"> --}}
			{{-- <text>AND DISTANCE</text> --}}
			{{-- <img src="/images/timeTwo.jpg" placeholder="distance">
		</div> --}}
		
	{{-- </div> --}}

	{{-- test carousel --}}
	<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        {{-- <img src="la.jpg" alt="Los Angeles" style="width:100%;"> --}}
        <img src="/images/conversations.jpg" placeholder="conversations" class="center">
      </div>

      <div class="item">
        {{-- <img src="chicago.jpg" alt="Chicago" class="center"> --}}
        <img src="/images/across.jpg" placeholder="conversations" class="center">
      </div>
    
      <div class="item">
        {{-- <img src="ny.jpg" alt="New york" class="center"> --}}
        <img src="/images/distance.jpg" placeholder="conversations" class="center">

      </div>

      <div class="item">
        {{-- <img src="ny.jpg" alt="New york" class="center"> --}}
        <img src="/images/time.jpg" placeholder="conversations" class="center">

      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




<script type="text/javascript">
	
	document.getElementById("across").addEventListener('mouseover', function() { /* do stuff here*/
	console.log("Hey i was hovered over") }, false);

	// document.getElementsByClassName("right").addEventListener('mouseover',function(){
	// 	console.log("Hey this works with class names too");
	// },false);
</script>

@stop