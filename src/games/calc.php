<?php
/**
 *Математическая фунция.
 */

namespace BrainGames\calc;

use function BrainGames\flow\startProcessEngine;

function calculation()
{ 
    $title = 'What is the result of expression?';
    $getDataGame = function ()
    {
        $numberRandOne = rand(1, 100);
        $numberRandTwo = rand(1, 100);
        $signs = ['-','+','*'];
        $operationRand = array_rand($signs, 1);
        $sign = $signs[$operationRand];	
        $question = "{$numberRandOne}{$sign}{$numberRandTwo}";

        switch ($sign) {
        case '-':
            $correctAnswer = $numberRandOne - $numberRandTwo;
            break;
        case '+':
            $correctAnswer = $numberRandOne + $numberRandTwo;
            break;
	case '*':
            $correctAnswer = $numberRandOne * $numberRandTwo;
     break;	
        }
        return array ($question, $correctAnswer);
    };
    startProcessEngine($title, $getDataGame);
}
