<?php
/**
 *Математическая фунция.
 */

namespace BrainGames\calc;

use function BrainGames\flow\gameProcess;


function calc()
{ 
       	$str = 'What is the result of expression?';
	$arr = [];

    for ($i = 0; $i < 3; $i++) {

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

	$arr[$question] = $answerCorrect;

    }	
	gameProcess($str, $arr);
}
