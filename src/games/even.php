<?php
/**
 * Функция для определения четности.
 */
  
namespace BrainGames\even;


use function  BrainGames\flow\gameProcess;


function start()
{	
    gameProcess('Answer "yes" if the number is even, otherwise answer "no".', 'even');

}

function even()
        {
                $numberRand = rand(1, 100);
                $question = $numberRand;

                $numberRand % 2 === 0 ? $answerCorrect = "yes" : $answerCorrect = "no";

		 return array ($answerCorrect, $question);
        }

