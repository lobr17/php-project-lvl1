<?php
/**
 * НОД
 */

namespace BrainGames\gcd;

use function BrainGames\flow\gameProcess;


function getGcdSub()
{
    $title = 'Find the greatest common divisor of given numbers.';

    $dataGame = function ()
    {	    

	$firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
	$question = "{$firstNumber} {$secondNumber}";
	
	$answerCorrect = getGcd($firstNumber, $secondNumber);
 	
        return array ($question, $answerCorrect);
    };

	gameProcess($title, $dataGame);

}



function getGcd($firstNumber, $secondNumber)
{
    while ($firstNumber != 0 and $secondNumber != 0) {
        if ($firstNumber > $secondNumber) {
            $firstNumber = $firstNumber % $secondNumber;
        } else {
            $secondNumber = $secondNumber % $firstNumber;
        }
    }
	return $firstNumber + $secondNumber;
}


