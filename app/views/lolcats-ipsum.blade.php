@extends('_master')


@section('title')
	LOLcat Ipsum Generator
@stop

@section('head')
	<?php require 'logic.php'; ?>
@stop



@section('content')
		<h1 class="text-center">LOLcat Ipsum Generator</h1>
		<br>
		<span class="narrow-paragraph">
			<p>Check out this tool for walls of text you can copy and paste to test your app. The lolspeak comes from the <a href="http://www.lolcatbible.com/index.php?title=Gospel_of_Mark">LOLcat Bible Book of Mark</a> and the latin text comes from <a href="http://la.wikisource.org/wiki/De_finibus_bonorum_et_malorum/Liber_Primus">a chunk of real Latin.</a> See if you can see the difference!</p>
			<br>
			<br>
			<form method='GET' action={{ url('lolcats-ipsum')}}>
				<label for='numPar'>How many paragraphs would you like? (max 15)</label>
				<input type='number' name='numPar' id='numPar' max='15' min='1' required><br>
				<br>
				<br>
				<button type='submit' name='getLOL' class='btn btn-lg'>Click here to Laugh Out Latin</button>
			</form>
		</span>
		<br>
		<br>
		<br>
		
			<?php 
				if(isset($_GET['getLOL'])) {
					echo "<span id=\"LOLoutput\" class=\"output\">";
					for($i = 0, $size = count($generatedText); $i < $size; $i++){
						echo "<p>".$generatedText[$i]."</p>";	
					}
					echo "</span><br><br>";
				}
			?>
		</span>
		<img src="grumpy-latin-cat.png">
@stop


