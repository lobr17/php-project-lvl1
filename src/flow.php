<?php
/**
 *Общий игровой процес
 *
 */

namespace BrainGames\flow;

use function cli\line;
use function cli\prompt;

function gameProcess($str, $arr)
{	
    $answer = '';
    $answerCorrect = '';
    $question = '';

    line('Welcome to Brain Games!');
    line($str);
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);

	foreach ($arr as $question => $answerCorrect) {

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
