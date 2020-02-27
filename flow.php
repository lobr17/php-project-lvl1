<?php
/**
 *Общий игровой процес
 *
 */

namespace BrainGames\Flow;

use function cli\line;
use function cli\prompt;
use function BrainGames\Even\even;

function evenPart()
{
	global $number;
//	global $answer;

	$number = rand(1, 100);
        $GLOBALS['number'] = $number; 	
	line('Question:'.$number);
       // $answer = prompt('You answer');
	$GLOBALS['answer'] = prompt('You answer');
	// return $answer;
	$answer = $GLOBALS['answer'];
	return $answer;
 	return $GLOBALS['number'];
}

function gameProcess()
{
    line('Welcome to Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);

    for ($i = 0; $i < 3; $i++) {
        global $number;	  
        global $answer;

        evenPart();

        $answerCorrect = even($GLOBALS['number']);
        
	if ($answer !== $answerCorrect) {
            line("'{$answer}' is wrong answer ;).Correct answer was '{$answerCorrect}'");
            exit;
        }

        line("Correct!");
    }

    line("Congratulations, $name");	
}
