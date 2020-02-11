<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;

function progression()
{

    line('Welcome to Brain Games!');
    line('What number is missing in the progression?');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);
   

	$firstNumber = rand(1,100);
	$step = rand(1,10);
	$invisibility = rand(0, 9);

	$arr[] = $firstNumber;

	for ($i = 1; $i < 10; $i++) {
  	  $arr[] .= $arr[$i-1] + $step;
	}

	$answerCorrect = $arr[$invisibility];
	$arr[$invisibility] = '..';

	//---строка вывода---
	$conclusion = '';

	foreach ($arr as $value) {
		$conclusion .= $value . ' ';
	};


           //---вопрос---
 	line('Question:' ."{$conclusion}");
        $answer = prompt('You answer');

	   if ($answer != $answerCorrect) {
		   line("'{$answer}' is wrong answer ;). Correct answer was '{$answerCorrect}'");
		   exit;

	   }
	   line("Correct");
   

      line("Congratulations, $name");	    
}


