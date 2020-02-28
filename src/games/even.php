<?php
/**
 * Функция для определения четности.
 */

namespace BrainGames\Even;

function even($num)
{   
    if ($num % 2 === 0){
        $answerCorrect = "yes";
    }else{
        $answerCorrect = "no";
    }
    return $answerCorrect;
}

