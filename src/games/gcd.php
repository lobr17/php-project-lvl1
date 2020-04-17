<?php
/**
 * НОД
 */

namespace BrainGames\gcd;

use function BrainGames\flow\gameProcess;

function start() {
	gameProcess('Find the greatest common divisor of given numbers.', 'gcd');
}

function getGcdSub()
{

	$great = rand(1, 100);
        $small = rand(1, 100);
	$question = "{$great} {$small}";
	
	$answerCorrect = getGcd($great, $small);
 	
	return array ($answerCorrect, $question);
}



function getGcd($great, $small)
{
//        $gcd = gmp_gcd($numberRandOne, $numberRandTwo);
//	$answerCorrect =  gmp_strval($gcd);
    if ($great == 0) return $small;
    if ($small == 0) return $great;
    if ($great == $small) return $great;
    if ($great == 1 || $small == 1) return 1;
    if (($great % 2 == 0) && ($small % 2 == 0)) return 2 * getGcd($great / 2, $small / 2);
    if (($great % 2 == 0) && ($small % 2 != 0)) return getGcd($great / 2, $small);
    if (($great % 2 != 0) && ($small % 2 == 0)) return getGcd($great, $small / 2);
    return getGcd($small, abs($great - $small));
}


