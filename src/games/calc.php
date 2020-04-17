<?php
/**
 *Математическая фунция.
 */

namespace BrainGames\calc;

use function BrainGames\flow\gameProcess;


function start()
{
	gameProcess('What is the result of expression?', 'calc');
}


function calc()
{ 

	$numberRandOne = rand(1, 100);
	$numberRandTwo = rand(1, 100);

	//Рандомный математический знак.
	
	$operationArr = ['-','+','*'];
	$operationRand = array_rand($operationArr, 1);
        $sign = $operationArr[$operationRand];	
        
	$question = "{$numberRandOne}{$sign}{$numberRandTwo}";

	//Калькулятор.
	
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

	return array ($answerCorrect, $question);
}


