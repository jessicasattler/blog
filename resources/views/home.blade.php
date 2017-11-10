@extends('templates.master')

@section('title')
	Welcome Page
@stop
@section('content')
	
	<div class="containerDiv">

		<div class="divStyleA col-sm-6 col-md-12">
			<text class="right">CONVERSATIONS</text>
			<img src="/images/conversationsTwo.jpg" placeholder="conversations">
		</div>
		<text id="across">ACROSS</text>
		<div class="divStyleA placeRight col-sm-offset-6 col-sm-6">
			{{-- <text>ACROSS</text> --}}
			<img src="/images/acrossTwo.jpg" placeholder="across">
		</div>
		<div class="divStyleA col-sm-6 col-md-12">
			<text class="right">TIME</text>
			<img src="/images/distanceTwo.jpg" placeholder="distance">
		</div>
		<text class="col-sm-12">AND DISTANCE</text>
		<div class="divStyleA col-sm-offset-6 col-sm-6 col-md-12">
			{{-- <text>AND DISTANCE</text> --}}
			<img src="/images/timeTwo.jpg" placeholder="distance">
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