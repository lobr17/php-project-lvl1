<?php
/**
 *Математическая фунция.
 */

namespace BrainGames\calc;

use function BrainGames\flow\gameProcess;


function calculation()
{ 
    $title = 'What is the result of expression?';

    $dataGame = function ()
    {
        $numberRandOne = rand(1, 100);
        $numberRandTwo = rand(1, 100);
	
        $signs = ['-','+','*'];
        $operationRand = array_rand($signs, 1);
        $sign = $signs[$operationRand];	
        
        $question = "{$numberRandOne}{$sign}{$numberRandTwo}";
	
        switch ($sign) {
        case '-':
            $answerCorrect = $numberRandOne - $numberRandTwo;
            break;
        case '+':
            $answerCorrect = $numberRandOne + $numberRandTwo;
            break;
	case '*':
            $answerCorrect = $numberRandOne * $numberRandTwo;
            break;	
       }

        return array ($question, $answerCorrect);
    };
    	
	gameProcess($title, $dataGame);
}
