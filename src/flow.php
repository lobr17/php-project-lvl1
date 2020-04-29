<?php
/**
 *Общий игровой процес
 *
 */

namespace BrainGames\flow;

use function cli\line;
use function cli\prompt;

use BrainGames;

function gameProcess($str, $func)
{	
    $answer = '';
    $answerCorrect = '';
    $question = '';
    $numberRound = 3;

    line('Welcome to Brain Games!');
    line($str);
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);

    for ($i = 0; $i < $numberRound; $i++) {
        [$question, $answerCorrect] = $func();

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
