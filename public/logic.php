<?php

// ******************** LOLCAT IPSUM CODE BELOW ************
include app_path().'/includes/simplehtmldom_1_5/wordscrape.php';

if(isset($_GET['getLOL'])) {
    $numPar = $_GET['numPar'];
	$generatedText = [];

	for($i=0; $i<= $numPar - 1; $i++){
		$parPosition = array_rand($lolArray);   // Randomly picking an index from the paragraph list
		$newParagraph = $lolArray[$parPosition];     // Grabbing the value of the key at the random index's position in the array
		array_push($generatedText, $newParagraph);      // Adding the paragraphs to an array    
		}

}



// ************* USER GENERATOR CODE BELOW ****************
include '..\vendor\fzaninotto\faker\src\autoload.php';

$faker = Faker\Factory::create();

if(isset($_GET['getUsers'])) {
   $numUser = $_GET['numUser'];
}
