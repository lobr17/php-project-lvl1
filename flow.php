<?php
/**
 *Общий игровой процес
 *
 */

namespace BrainGames\Flow;

use function cli\line;
use function cli\prompt;

//Подключение функции по определению четности числа.
use function BrainGames\Even\even;

//ПОдключение функции калькулятор.
use function BrainGames\Calc\calc;

//Подключение фунции НОД.
use function BrainGames\Gcd\gcd;

//Подключение к функции арифметической прогрессии.
use function BrainGames\Progression\progression;

//Подключение к функции определения простого числа.
use function BrainGames\Prime\prime;

//функция для вставки в игровой процесс данных от выбранной задачи.
function gamesPart($gam)
{
	if ($gam === 'even') {
		 return evenPart();
	}
	if ($gam === 'calc') {
		return calcPart();
	}
	if ($gam === 'gcd') {
		return gcdPart();
	}
	if ($gam === 'progression') {
		return progressionPart();
	}
	if ($gam === 'prime') {
		return primePart();
	}
}

//Для задачи по определению четности числа.
function evenPart()
{
	global $answer;
	global $answerCorrect;

	$GLOBALS['number'] = rand(1, 100);
 	
	line('Question:'.$GLOBALS['number']);
        $answer = prompt('You answer');

        $answerCorrect = even($GLOBALS['number']);

	return $answer;
	return $GLOBALS['number'];
	return $answerCorrect;
}

//Для калькулятора.
function calcPart()
{
    global $answer;
    global $answerCorrect;    

    //Два рандомных числа.
    $GLOBALS['numberOne'] = rand(1, 100);
    $GLOBALS['numberTwo'] = rand(1, 100);

    //Рандомный математический знак из трёх.
    $GLOBALS['operationArr'] = ['-','+','*'];
    $GLOBALS['operationRand'] = array_rand($GLOBALS['operationArr'],1);
   
    $operationRand = $GLOBALS['operationRand'];
    $operationArr = $GLOBALS['operationArr'];
    $GLOBALS['sign'] = $operationArr[$operationRand];

    //Вопрос пользователю.
    line('Question: '."{$GLOBALS['numberOne']}{$GLOBALS['sign']}{$GLOBALS['numberTwo']}");
    $answer = prompt('You answer');

    //Вызов функции расчета математического выражения
    $answerCorrect = calc();

    return $answer;
    return $answerCorrect;

}

//Для определения НОД.
function gcdPart()
{
	global $answer;
	global $answerCorrect;

        $GLOBALS['numberOne'] = rand(1, 100);
        $GLOBALS['numberTwo'] = rand(1, 100);

//Вопрос пользователю.
        line('Question:' ."{$GLOBALS['numberOne']} {$GLOBALS['numberTwo']}");              
	$answer = prompt('You answer');

//Вызов фунции НОД.
$answerCorrect = gcd();

return $answer;
return $answerCorrect;
}

//Для задачи арифметической прогрессии.
function progressionPart()
{

	global $answer;
	global $answerCorrect;
	
        $GLOBALS['firstNumber'] = rand(1,100);
        $GLOBALS['step'] = rand(1,10);
        $GLOBALS['invisibility'] = rand(0,9);

	//Получение строки прогрессии и правильного невидимого значения.
	progression();

        $answerCorrect = $GLOBALS['answerCorrect'];

        //Вопрос пользователю.
        line('Question:' ."{$GLOBALS['conclusion']}");
        $answer = prompt('You answer');


	return $answer;
	return $answerCorrect;

}

function primePart() 
{
        global $answer;
        global $answerCorrect;

	$GLOBALS['number'] = rand(1, 100);

	line('Question:'.$GLOBALS['number']);
	$answer = prompt('You answer');

	$answerCorrect = prime($GLOBALS['number']);

	return $answer;
	return $answerCorrect;
}

function gameProcess()
{
    line('Welcome to Brain Games!');
    line($GLOBALS['str']);
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);

    for ($i = 0; $i < 3; $i++) { 
        global $answer;
        global $answerCorrect;

        gamesPart($GLOBALS['games']);

	if ($answer != $answerCorrect) {
            line("'{$answer}' is wrong answer ;).Correct answer was '{$answerCorrect}'");
            exit;
        }

        line("Correct!");
    }

    line("Congratulations, $name");	
}
