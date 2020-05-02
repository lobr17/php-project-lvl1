<?php
/**
 * Арифметическая прогрессия.
 */

namespace BrainGames\progression;

use function BrainGames\flow\startProcessEngine;

function progression()
{
    $title = 'What number is missing in the progression?';
    $getDataGame = function()
    {    		
        $progression = [];
        $correctAnswer = '';
	$diff = rand(1, 10);
	$start = rand(1, 100);
	$progressionLength = rand(3, 10);
	
	for ($i = 0; $i < $progressionLength; $i++) {
  	  $progression[$i] = $start + $diff * $i;
	}

        $invisibility = rand(0, $progressionLength);
	$correctAnswer = $start + $diff * $invisibility;	
	$progression[$invisibility] = '..';
        $question = implode(' ', $progression);
      
        return array ($question, $correctAnswer);
    };	
    startProcessEngine($title, $getDataGame);
}
