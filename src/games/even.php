<?php
/**
 * Функция для определения четности.
 */
  
namespace BrainGames\even;

use function  BrainGames\flow\gameProcess;


function even()
{
		$str = 'Answer "yes" if the number is even, otherwise answer "no".';
		
		$arr = [];

		for ($i = 0; $i < 3; $i++) {
			
               		$numberRand = rand(1, 100);
                	$question = $numberRand;

			$numberRand % 2 === 0 ? $answerCorrect = "yes" : $answerCorrect = "no";

			$arr[$question] = $answerCorrect; 
		}

		 gameProcess($str, $arr);
}
