@extends('_master')


@section('title')
	Fake User Generator
@stop

@section('head')
	<?php require 'logic.php'; ?>
	<!--<link rel="stylesheet" type="text/css" href="css/lolcats-ipsum.css"> -->
@stop



@section('content')
		<h1 class="text-center">Fake User Generator</h1>
		<br>
		<br>
		<form method='GET' action='user-gen' class='center-block'>
			<label for='numUser'>How many users would you like? (max 99)</label>
			<input type='number' name='numUser' id='numUser' max='99' min='1' required><br>
			
			<label for='birthday'>Include a birthday?</label>
			<input type='checkbox' name='birthday' id='birthday'><br>
			
			<label for='profile'>or a profile?</label>
			<input type='checkbox' name='profile' id='profile'><br>
			
			<label for='phone'>also a phone number?</label>
			<input type='checkbox' name='phone' id='phone'><br>
			<br>
			
			<button type='submit' name='getUsers' class='btn btn-primary btn-lg center-block'>Get your users</button>
		</form>
		<br>
		<span id='output' class='center-block'>
			<?php
				if(isset($_GET['getUsers'])) {
					for ($i=0; $i < $numUser; $i++) {
						echo $faker->name, "<br>";
						if (isset($_GET['birthday'])){
							echo $faker->dateTimeThisCentury->format('Y-m-d')."<br>";
						} if (isset($_GET['profile'])){
							echo $faker->text."<br>";
						}

					}
				}
			?>
		</span>



@stop