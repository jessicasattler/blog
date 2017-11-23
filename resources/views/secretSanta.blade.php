@extends('templates.master')

@section('title')
	Secret Santa
@stop
@section('content')
	<h2>Welcome to Secret Santa</h2>

	<?php 
	

	$names = 	
	[
		["Drew","2055275184"],
		["Ericka","2103247231"],
		["Jocelyn","2103247032"],
		["Ernesto","2104387231"],
		["Papi","2104124975"],
		["Mami","2108388713"],
		["Whitney","2107303948"],
		["Jessica","2103175500"]
	];

	$random = [];

	//create a function to randomize the list of names
	//create a for loop that constantly checks
	//the length of the names array
	//and create a random number generator that has a ceiling of the names array length 
	//each time a random number is created, that will be the index of the value that will be taken out of the names array

	//do for loop that does iterates through names array
	//in the body we will send text message that says "You're buying a gift for random[(i + 1) % 8][0]

	// Twilio API
		// Get the PHP helper library from twilio.com/docs/php/install
	require_once '../vendor/autoload.php'; // Loads the library
	use Twilio\Rest\Client;
	

	// Your Account Sid and Auth Token from twilio.com/user/account
	$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
	$token = "your_auth_token";
	$client = new Client($sid, $token);

	$client->messages
	    ->create(
	        "+15558675309",
	        array(
	            "from" => "+14158141829",
	            "body" => "Jenny please?! I love you <3",
	            "mediaUrl" => "http://www.example.com/hearts.png"
	        )
	    );

 ?>
@stop