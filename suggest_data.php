<?php
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Using '$_REQUEST' for handling both get and post requests
$query_string = $_REQUEST['q'];

$suggestion='';

if($query_string !== ''){
	$q = strtolower($query_string);
	$len = strlen($q);
	foreach ($people as $person) {
		# code...
		
		// 'substr' is returning person array value from 0 to entered lenght of search query string
		// 'stristr' checks if that matches the entered search query string

		if(stristr($q , substr($person, 0,$len))){
			if($suggestion===''){
				// adding very first suggestion to the queue
				$suggestion=$person;
			}else{
				// appending next suggestions
				$suggestion.=', '.$person;
			}
		}
	}
}

echo $suggestion ==='' ? 'No records found' : $suggestion;

?>