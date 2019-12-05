<?php

$landen = array("Japan"=>"Tokyo", "Mexico"=>"Mexico City", "USA"=>"Washington D.C", "India"=>"New Delhi", "Zuid-Korea"=>"Seoul", "China"=>"Peking", "Nigeria"=>"Abuja", "Argentina"=>"Buenos Aires", "Egypt"=>"Cairo", "UK"=>"London");
	
$s = 0;
foreach ($landen as $land => $stad) {
	echo "Wat is de hoofdstad van? " . $land . PHP_EOL;
	$antwoord = readline (">");
	if ($antwoord === $stad) {
		echo "Correct" . PHP_EOL;
	$s++;
	} else {
		echo "Incorrect" . PHP_EOL;
		echo "Het correcte antwoord was: " . $stad . PHP_EOL;
	}
}
echo $s . " van de 10 goed ";