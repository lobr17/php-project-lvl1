<?php
/**
 *Общий игровой процес
 *
 */

namespace BrainGames\flow;

use function cli\line;
use function cli\prompt;


//Подключение функции по определению четности числа.
use function BrainGames\even\even;

//ПОдключение функции калькулятор.
use function BrainGames\calc\calc;

//Подключение фунции НОД.
use function BrainGames\gcd\getGcdSub;

//Подключение к функции арифметической прогрессии.
use function BrainGames\progression\progression;

//Подключение к функции определения простого числа.
use function BrainGames\prime\isPrime;


function gameProcess($str, $games)
{	    	
    $answer = '';
    $answerCorrect = '';
    $question = '';

    line('Welcome to Brain Games!');
    line($str);
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);

    for ($i = 0; $i < 3; $i++) {

	switch ($games) {
		case 'even':
			[$answerCorrect, $question] = even();
			break;
		case 'gcd':
                        [$answerCorrect, $question] = getGcdSub();
			break;
		case 'calc':
                        [$answerCorrect, $question] = calc();
			break;
		case 'progression':
                        [$answerCorrect, $question] = progression();
			break;
		case 'prime':
                        [$answerCorrect, $question] = isPrime();
                        break;	
	}	    

	line('Question:'.$question);       

	$answer = prompt('You answer');

	if ($answer != $answerCorrect) {
            line("'{$answer}' is wrong answer ;).Correct answer was '{$answerCorrect}'");
            exit;
        }

        line("Correct!");
    }

    line("Congratulations, $name");	
}
