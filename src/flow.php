<?php
/**
 * Общий игровой процес.
 *
 */

namespace BrainGames\flow;

use function cli\line;
use function cli\prompt;

use BrainGames;

function startProcessEngine($title, $getDataGame)
{
    $roundsCount = 3;

    line('Welcome to Brain Games!');
    line($title);
    $nameUser = prompt('May I have your name?');
    line("Hello, %s", $nameUser);

    for ($i = 0; $i < $roundsCount; $i++) {
        [$question, $correctAnswer] = $getDataGame();

        line('Question:'.$question);       

        $answerUser = prompt('You answer');

        if ($answerUser != $correctAnswer) {
            line("'{$answerUser}' is wrong answer ;).Correct answer was '{$correctAnswer}'");
              exit;
        }

        line("Correct!");
    }
    line("Congratulations, $nameUser");	
}
