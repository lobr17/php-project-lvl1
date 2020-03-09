<?php
/**
 *Математическая фунция.
 */

namespace BrainGames\Calc;

function calc()
{ 
    eval('$answerCorrect = ' .$GLOBALS['numberOne'].$GLOBALS['sign'].$GLOBALS['numberTwo'].';');

   $GLOBALS['answerCorrect'] = $answerCorrect;

   return $GLOBALS['answerCorrect'];
    
}


