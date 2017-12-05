@extends('templates.master')

@section('title')
	Click Events
@stop
@section('content')
	<div>
		<button id="buttonOne" class="button btn-danger">Button  <button class="buttonsTwo btn btn-default">Button 2</button></button>
		<br>
		{{-- <button class="buttonsTwo btn btn-default">Button 2</button> --}}
		<br>
		<button class="buttonsThree btn btn-primary">Button 3</button>
	</div>

	<script type="text/javascript">
		
		if(document.querySelector("#buttonOne")){
			document.querySelector("#buttonOne").addEventListener("click", trackButtonOne);

			function trackButtonOne(){

				console.log("hey there, I'm button one");
			}
		}
		if(document.querySelector(".buttonsTwo")){

			document.querySelector(".buttonsTwo").addEventListener("click", trackButtonTwo);

			function trackButtonTwo(){

				console.log("hey there, I'm button two");
			}
		}
		if(document.querySelector(".buttonsThree")){

			document.querySelector(".buttonsThree").addEventListener("click", trackButtonThree);

			function trackButtonThree(){

				console.log("hey there, I'm button three");
			}
		}
	</script>
@stop