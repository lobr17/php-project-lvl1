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
                        [$answerCorrect, $question] = gcd();
			break;
		case 'calc':
                        [$answerCorrect, $question] = calc();
			break;
		case 'progression':
                        [$answerCorrect, $question] = progression();
			break;
		case 'prime':
                        [$answerCorrect, $question] = prime();
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
