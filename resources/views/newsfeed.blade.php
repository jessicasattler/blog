@extends('templates.master')

@section('title')
	Newsfeed
@stop
@section('content')
	

<div class="form-group col-md-6 col-md-offset-2">
	
		<form>
		  
		    <h2>Post Name</h2>
		    <br>
		    <h5>01/15/2018</h5>
		    
		  
			  <div class="form-check">
			    <label class="form-check-label">
			      {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> --}}

			      
			    </label>
			    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

			  </div>

			  <br>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
</div>

	
@stop 