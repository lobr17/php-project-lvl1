<?php
/**
 *Общий игровой процес
 *
 */

namespace BrainGames\Flow;

use function cli\line;
use function cli\prompt;
use function BrainGames\Even\even;


function gamesPart($gam)
{
	if ($gam === 'even') {
		 return evenPart();
	}
	if ($gam === 'calc') {
		return calcPart();
	}
}


function evenPart()
{
	global $answer;
	global $answerCorrect;

	$GLOBALS['number'] = rand(1, 100);
 	
	line('Question:'.$GLOBALS['number']);
        $answer = prompt('You answer');

        $answerCorrect = even($GLOBALS['number']);

	return $answer;
	return $GLOBALS['number'];
	return $answerCorrect;
}


function calcPart()
{
	
}


function gameProcess()
{
    line('Welcome to Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);

    for ($i = 0; $i < 3; $i++) { 
        global $answer;
        global $answerCorrect;

        gamesPart($GLOBALS['games']);
        
	if ($answer !== $answerCorrect) {
            line("'{$answer}' is wrong answer ;).Correct answer was '{$answerCorrect}'");
            exit;
        }

        line("Correct!");
    }

    line("Congratulations, $name");	
}
