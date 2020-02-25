<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;

function prime()
{

    line('Welcome to Brain Games!');
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);


    $number = rand(1, 100);

    line('Question:'.$number);
    $answer = prompt('You answer');
        
    $prime = gmp_prob_prime($number);
    
    if ($prime === 0 ) {
    	$answerCorrect = 'no';
    } elseif ($prime === 1 or $prime === 2) {
        $answerCorrect = 'yes';
    }

    if ($answer !== $answerCorrect) {
	   line("'{$answer}' is wrong answer ;). Correct answer was '{$answerCorrect}'");
	   exit;
    }
     line("Correct");
     line("Congratulations, $name");	    
}


