<?php 

error_reporting(E_ALL);      
ini_set('display_errors', 1);


require "simple_html_dom.php";
$lolArray = [];

function remove_link($element) {
	        if ($element->tag=='a')
	                $element->outertext = '';
} // gets rid of links

for ($i=1; $i <= 2; $i++) { 
	$html = file_get_html('http://www.lolcatbible.com/index.php?title=Mark_'.$i);
	$html->set_callback('remove_link');
	foreach($html->find('p') as $e) 
	    $wordsToAdd = $e->innertext;
	    array_push($lolArray, $wordsToAdd); 
}; // grabs the innertext of p elements and adds the to an array

print_r($lolArray);




	

?>