<?php
/**
 * НОД
 */

namespace BrainGames\Gcd;

function gcd()
{
 
           $gcd = gmp_gcd($GLOBALS['numberOne'], $GLOBALS['numberTwo']);
	   $GLOBALS['answerCorrect'] =  gmp_strval($gcd);

	 return $GLOBALS['answerCorrect'];  
}


