<?php
/**
 * Функция для определения четности.
 */
  
namespace BrainGames\even;

use function  BrainGames\flow\startProcessEngine;

function even()
{
    $title = 'Answer "yes" if the number is even, otherwise answer "no".';
    $getDataGame = function ()
    {
        $question = rand(1, 100);
        $correctAnswer = $question % 2 === 0 ? "yes" : "no";
        return array ($question, $correctAnswer);
    };
    startProcessEngine($title, $getDataGame); 
}
