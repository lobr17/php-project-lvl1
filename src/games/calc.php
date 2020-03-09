<?php
/**
 *Математическая фунция.
 */

namespace BrainGames\Calc;

function calc($numberOne, $sign, $numberTwo)
{
    //Правильный результат вычислений.
    eval('$answerCorrect = ' .$numberOne.$sign.$numberTwo.';');	    

   $GLOBALS['answerCorrect'] = $answerCorrect;

   return $GLOBALS['answerCorrect'];
    
}


