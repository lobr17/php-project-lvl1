<?php
/**
 * Арифметическая прогрессия.
 */

namespace BrainGames\Progression;

function progression()
{
	$arr[] = $GLOBALS['firstNumber'];

	for ($i = 1; $i < 10; $i++) {
  	  $arr[] .= $arr[$i-1] + $GLOBALS['step'];
	}

	$invisibility = $GLOBALS['invisibility'];

	$answerCorrect = $arr[$invisibility];
	$arr[$invisibility] = '..';

	//---строка вывода---
	$conclusion = '';

	foreach ($arr as $value) {
		$conclusion .= $value . ' ';
	};

        $GLOBALS['conclusion'] = $conclusion;
        $GLOBALS['answerCorrect'] = $answerCorrect;

        return $GLOBALS['conclusion']; 

	return $GLOBALS['answerCorrect'];
	    
}


