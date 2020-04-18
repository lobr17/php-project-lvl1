<?php
/**
 *Общий игровой процес
 *
 */

namespace BrainGames\flow;

use function cli\line;
use function cli\prompt;
use BrainGames;


function gameProcess($str, $games)
{	    	
    $answer = '';
    $answerCorrect = '';
    $question = '';

    line('Welcome to Brain Games!');
    line($str);
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);

    for ($i = 0; $i < 3; $i++) {

	switch ($games) {
		case 'even':
			[$answerCorrect, $question] = BrainGames\even\even();
			break;
		case 'gcd':
                        [$answerCorrect, $question] = BrainGames\gcd\getGcdSub();
			break;
		case 'calc':
                        [$answerCorrect, $question] = BrainGames\calc\calc();
			break;
		case 'progression':
                        [$answerCorrect, $question] = BrainGames\progression\progression();
			break;
		case 'prime':
                        [$answerCorrect, $question] = BrainGames\prime\isPrime();
                        break;	
	}	    

	line('Question:'.$question);       

	$answer = prompt('You answer');

	if ($answer != $answerCorrect) {
            line("'{$answer}' is wrong answer ;).Correct answer was '{$answerCorrect}'");
            exit;
        }

        line("Correct!");
    }

    line("Congratulations, $name");	
}
