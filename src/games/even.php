<?php
/**
 * Функция для определения четности.
 */
  
namespace BrainGames\even;

use function  BrainGames\flow\gameProcess;


function isEven()
{
    $title = 'Answer "yes" if the number is even, otherwise answer "no".';

    $dataGame = function ()
    {
        $question = rand(1, 100);

        $question % 2 === 0 ? $answerCorrect = "yes" : $answerCorrect = "no";

        return array ($question, $answerCorrect);
    };

    gameProcess($title, $dataGame); 
}
