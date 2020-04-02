<?php
/**
 * Функция для определения четности.
 */

namespace BrainGames\Even;

function even()
{   
    $numberRand = rand(1, 100);
    $question = $numberRand;	

    if ($numberRand % 2 === 0){
        $answerCorrect = "yes";
    } else {
        $answerCorrect = "no";
    }

      return array ($answerCorrect, $question);

}

