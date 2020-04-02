<?php
/**
 * НОД
 */

namespace BrainGames\Gcd;

function gcd()
{
	$numberRandOne = rand(1, 100);
	$numberRandTwo = rand(1, 100);
	$question = "{$numberRandOne} {$numberRandTwo}";

        $gcd = gmp_gcd($numberRandOne, $numberRandTwo);
	$answerCorrect =  gmp_strval($gcd);

        return array ($answerCorrect, $question);  
}


