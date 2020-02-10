<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;

function gcd()
{

    line('Welcome to Brain Games!');
    line('What is the result of the expression?');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);


   for ($i = 0; $i < 3; $i++) {

	   $numberOne = rand(1, 100);
	   $numberTwo = rand(1, 100);
        
           $gcd = gmp_gcd($numberOne, $numberTwo);
	   $gcdCorrect =  gmp_strval($gcd);  

           //---вопрос---
	   line('Question:' ."{$numberOne} {$numberTwo}");		
           $answer = prompt('You answer');

	   if ($answer != $gcdCorrect) {
		   line("'{$answer}' is wrong answer ;). Correct answer was '{$gcdCorrect}'");
		   exit;

	   }
	   line("Correct");
   }

      line("Congratulations, $name");	    
}


