<?php
/**
 * Общий игровой процес.
 *
 */

namespace BrainGames\flow;

use function cli\line;
use function cli\prompt;

use BrainGames;

function gameProcess($title, $dataGame)
{	
    $numberRound = 3;

    line('Welcome to Brain Games!');
    line($title);
    $nameUser = prompt('May I have your name?');
    line("Hello, %s", $nameUser);

    for ($i = 0; $i < $numberRound; $i++) {
	    [$question, $answerCorrect] = $dataGame();

        line('Question:'.$question);       

        $answerUser = prompt('You answer');

        if ($answerUser != $answerCorrect) {
            line("'{$answerUser}' is wrong answer ;).Correct answer was '{$answerCorrect}'");
              exit;
        }

        line("Correct!");
    }

    line("Congratulations, $nameUser");	
}
