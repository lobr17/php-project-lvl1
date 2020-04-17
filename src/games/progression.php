<?php
/**
 * Арифметическая прогрессия.
 */

namespace BrainGames\progression;

use function BrainGames\flow\gameProcess;

function start()
{
	gameProcess('What number is missing in the progression?', 'progression');
}

function progression()
{
        $numberRand = rand(1, 100);
	$step = rand(1, 10);
	$invisibility = rand(0, 9);

	$arr[] = $numberRand;
	$progrLength = 10;

	for ($i = 1; $i < $progrLength; $i++) {
  	  $arr[] .= $arr[$i-1] + $step;
	}

	$answerCorrect = $arr[$invisibility];
	$arr[$invisibility] = '..';

	//---строка вывода---
	$conclusion = '';

	foreach ($arr as $value) {
		$conclusion .= $value . ' ';
	};

	return array ($answerCorrect, $conclusion);	    
}


