<?php
/**
 * Арифметическая прогрессия.
 */

namespace BrainGames\progression;

use function BrainGames\flow\gameProcess;


function isProgression()
{
    $title = 'What number is missing in the progression?';

    $dataGame = function()
    {    		
        $numbers = [];
        $answerCorrect = '';
	$diff = rand(1, 10);
	$start = rand(1, 100);
	$progrLength = rand(3, 10);
	
	for ($i = 0; $i < $progrLength; $i++) {
  	  $numbers[$i] = $start + $diff * $i;
	}

        $invisibility = rand(0, $progrLength);

	$answerCorrect = $numbers[$invisibility];
	$numbers[$invisibility] = '..';

	$question = '';

        $question = implode(' ', $numbers);
       

    return array ($question, $answerCorrect);	 
    };	
	gameProcess($title, $dataGame);
}


