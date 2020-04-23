<?php

namespace BrainGames\prime;

use function cli\line;
use function cli\prompt;

use function BrainGames\flow\gameProcess;


function isPrime()
{
        $str = 'Answer "yes" if given number is prime. Otherwise answer "no"';
        $arr = [];

    for ($i = 0; $i < 3; $i++) {

	$numberRand = rand(0, 100);
	$question = $numberRand;
        $answerCorrect = '';

	if ($numberRand === 1) {
		$answerCorrect = 'no';
	} else {
//перебираем возможные делители от 2 до sqrt($numberRand).		
		for ($dev = 2; $dev * $dev <= $numberRand; $dev++ ) {
			if ($numberRand % $dev === 0) {
				$answerCorrect = 'no';
				break;
			} else {
				$answerCorrect = 'yes';
			}
		}
	}	

	$arr[$question] = $answerCorrect;
    }	
	gameProcess($str, $arr);
}


