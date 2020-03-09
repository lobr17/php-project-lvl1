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

//функция для вставки в игровой процесс данных от выбранной задачи.
function gamesPart($gam)
{
	if ($gam === 'even') {
		 return evenPart();
	}
	if ($gam === 'calc') {
		return calcPart();
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
    $answerCorrect = calc($GLOBALS['numberOne'], $GLOBALS['sign'], $GLOBALS['numberTwo']);

    return $answer;
    return $answerCorrect;

}


function gameProcess()
{
    line('Welcome to Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
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
