@extends('_master')


@section('title')
	LOLcat Ipsum Generator
@stop

@section('head')
	<?php require 'logic.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/lolcats-ipsum.css">
@stop



@section('content')
		<h1 class="text-center">LOLcat Ipsum Generator</h1>
		<br>
		<span id='output' class='center-block'>
			<?php 
				for($i = 0, $size = count($generatedText); $i < $size; $i++){
					echo "<p>".$generatedText[$i]."</p>";	
				}
				
			?>
		</span>
		<br>
		<form method='GET' action='lolcats-ipsum' class='center-block'>
			<label for='numPar'>How many paragraphs would you like? (max 15)</label>
			<input type='number' name='numPar' id='numPar' max='15' min='1'><br>
			<br>
			<button type='submit' class='btn btn-primary btn-lg center-block'>Click here to Laugh Out Loud</button>
		</form>



@stop
