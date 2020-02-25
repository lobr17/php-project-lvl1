<?php
/**
 * Задача на определение четности.
 */ 
namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function subEven($number)
{
    if ($number % 2 === 0) {
                $answerCorrect = "yes";
            } else {
                $answerCorrect = "no";
	    }
    return $answerCorrect;
}


function even()
{	
    line('Welcome to Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);

    for ($i = 0; $i < 3; $i++) {
       
        $number = rand(1, 100);
	$answerCorrect = subEven($number);

        line('Question:'.$number);
        $answer = prompt('You answer');

        if ($answer !== $answerCorrect) {
            line("'{$answer}' is wrong answer ;).Correct answer was '{$answerCorrect}'");
            exit;		      
	}

        line("Correct!");
    }

    line("Congratulations, $name");
        	    
}
