@extends('templates.master')

@section('title')
	Welcome Page
@stop
@section('content')
	
		
	{{-- </div> --}}

	{{-- test carousel --}}
	<div class="container col-lg-offset-2 col-lg-8">
  <h2 class="textCenter cursiveFont">Friend Blog</h2>  
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
        <h3 class="textCenter cursiveFont placeOverImage">Conversations</h3>
        <img src="/images/friendsInTruck.jpg" placeholder="conversations" class="center">
      </div>

      <div class="item">

        <h3 class="textCenter cursiveFont placeOverImage">Across</h3>
        <img src="/images/across.jpg" placeholder="conversations" class="center">
      </div>
   
      <div class="item">
        <h3 class="textCenter cursiveFont placeOverImage">Time</h3>
        <img src="/images/time.jpg" placeholder="conversations" class="center">
       
      </div>

      <div class="item">
        <h3 class="textCenter cursiveFont placeOverImage"> & Distance</h3>
        <img src="/images/distance.jpg" placeholder="conversations" class="center">
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

    {{-- Sign up form --}}
    <div class="backgroundColor col-xs-10 col-xs-offset-1">
      <form class="form" action="POST" name="signUp">
        <div class="form-group">
        {{-- <a name="signUp">Sign Up Form</a> --}}
        <h2 class="center"><a name="signUp">Sign Up</a></h2>
        <div class="col-sm-3">Username</div>
        <input type="text" class="form-control" name="username">
         <div class="col-sm-3">Email</div>
        <input type="email" class="form-control" name="email">
         <div class="col-sm-3">Password</div>
        <input type="password" class="form-control" name="password">
         <div class="col-sm-3">Confirm Password</div>
        <input type="email" class="form-control" name="confirmPassword">
        <button type="submit" class="btn btn-primary col-xs-offset-4 col-xs-4 spaceTop">Submit</button>
        
        </div>
      </form>
    </div>
    {{-- Log in form --}}
    <div class="backgroundColor spaceTop col-xs-10 col-xs-offset-1">
       <form class="form" action="POST" name="login">
        <div class="form-group">
        {{-- <a name="signUp">Sign Up Form</a> --}}
        <h2 class="center"><a name="login">Login</a></h2>
        <div class="col-sm-3">Username</div>
        <input type="text" class="form-control" name="username">
       
         <div class="col-sm-3">Password</div>
        <input type="password" class="form-control" name="password">
       
        <button type="submit" class="btn btn-primary col-xs-offset-4 col-xs-4 spaceTop">Submit</button>
        
        </div>
      </form>
    </div>

  </div>
</div>




<script type="text/javascript">
	
	// document.getElementById("across").addEventListener('mouseover', function() { /* do stuff here*/
	// console.log("Hey i was hovered over") }, false);

	// document.getElementsByClassName("right").addEventListener('mouseover',function(){
	// 	console.log("Hey this works with class names too");
	// },false);
  // document.querySelector("#signUp").addEventListener('click', );

  // document.querySelector("#signUpForm").addEventListener("click", trackButtonOne);

  // function trackButtonOne(){

  //   console.log("hey there, I'm button one");
  // }

  function navigate(element){
    document.querySelector(element).addEventListener("click",

      function(){
        console.log("User clicked in "+ element);
        var message = "hello";
      }
    )
  };

  navigate("#signUpForm");

  navigate("#loginForm");
</script>

@stop