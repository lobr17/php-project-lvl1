<?php
/**
 * Арифметическая прогрессия.
 */

namespace BrainGames\progression;

use function BrainGames\flow\gameProcess;


function isProgression()
{
        $str = 'What number is missing in the progression?';
	$arr = [];

    for ($j = 0; $j < 3; $j++) {	

        $arr1 = [];
        $answerCorrect = '';
	$diff = rand(1, 10);
	$start = rand(1, 100);
	$progrLength = rand(3, 10);
	
	for ($i = 0; $i < $progrLength; $i++) {
  	  $arr1[$i] = $start + $diff * $i;
	}

        $invisibility = rand(0, count($arr1)-1);

	$answerCorrect = $arr1[$invisibility];
	$arr1[$invisibility] = '..';

	//---строка вывода---
	$question = '';

	foreach ($arr1 as $value) {
		$question .= $value . ' ';
	};
        
	$arr[$question] = $answerCorrect; 
    }	
	gameProcess($str, $arr);
}


