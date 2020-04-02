<?php
/**
 * Арифметическая прогрессия.
 */

namespace BrainGames\Progression;

function progression()
{
        $numberRand = rand(1, 100);
	$step = rand(1, 10);
	$invisibility = rand(0, 9);

	$arr[] = $numberRand;

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

	return array ($answerCorrect, $conclusion);	    
}


