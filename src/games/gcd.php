<?php
/**
 * НОД
 */

namespace BrainGames\gcd;

use function BrainGames\flow\gameProcess;


function getGcdSub()
{
	$str = 'Find the greatest common divisor of given numbers.';

	$arr = [];

    for ($i = 0; $i < 3; $i++) {	

	$great = rand(1, 100);
        $small = rand(1, 100);
	$question = "{$great} {$small}";
	
	$answerCorrect = getGcd($great, $small);
 	
	$arr[$question] = $answerCorrect;
    }

	gameProcess($str, $arr);

}



function getGcd($great, $small)
{
    while ($great != 0 and $small != 0) {
        if ($great > $small) {
            $great = $great % $small;
        } else {
            $small = $small % $great;
        }
    }
	return $great + $small;
}


