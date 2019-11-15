#!/usr/bin/env php

<?php


echo "Welke operatie wil je uitvoeren? (+.-.*.%)  ";
$antwoord = readline("");
if ($antwoord == "+") {
		$nummer1 = readline("Wat is je eerste getal?: ");
			$nummer2 = readline("Wat is je tweede getal?: ");
			    $add = (int)$nummer1 + (int)$nummer2;
				echo "Uw antwoord is: $add"; 
				}
				
				
              

elseif ($antwoord == "-") {
		$nummer1 = readline("Wat is je eerste getal?: ");
		 $nummer2 = readline("Wat is je tweede getal?: ");
				$add = (int)$nummer1 - (int)$nummer2;
				echo "Uw antwoord is: $add" . PHP_EOL;
				
				if (	!(is_numeric($nummer1) && is_numeric($nummer2))	){
				print_r ("Dit is geen getal");
		      
			    exit(); }
				
    
				

               
}

elseif ($antwoord == "/") {
		$nummer1 = readline("Wat is je eerste getal?: ");
			$nummer2 = readline("Wat is je tweede getal?: ");
				$add = (int)$nummer1 / (int)$nummer2;
				echo "Uw antwoord is: $add"  . PHP_EOL;
				
				if (	!(is_numeric($nummer1) && is_numeric($nummer2))	){
				print_r ("Dit is geen getal");
		      
			    exit(); }
				
            
}
elseif ($antwoord == "%") {
		$nummer1 = readline("Wat is je eerste getal?: ");
			$nummer2 = readline("Wat is je tweede getal?: ");
				$add = (int)$nummer1 % (int)$nummer2;
				echo "Uw antwoord is: $add"  . PHP_EOL;
				
				if (	!(is_numeric($nummer1) && is_numeric($nummer2))	){
				print_r ("Dit is geen getal");
		      
			    exit(); }
               
}
elseif ($antwoord == "*") {
		$nummer1 = readline("Wat is je eerste getal?: ");
			$nummer2 = readline("Wat is je tweede getal?: ");
				$add = (int)$nummer1 * (int)$nummer2;
				echo "Uw antwoord is: $add"   . PHP_EOL;

				
				
				
             
}

else {
	echo "correct symbool invoeren!";
}
 



?>