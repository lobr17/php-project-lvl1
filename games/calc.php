<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;

function calc()
{

    line('Welcome to Brain Games!');
    line('What is the result of the expression?');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);


   for ($i = 0; $i < 3; $i++) {

    $numberOne = rand(1, 100);
    $numberTwo = rand(1, 100);

    //---------произвольный математический знак из массива---------------
    $operationArr = ['-','+','*'];
    $operationRand = array_rand($operationArr,1);

    $answerCorrect = 0;

    //---правильный результат вычислений---
    eval('$answerCorrect = ' .$numberOne.$operationArr[$operationRand].$numberTwo.';');

    //---вопрос---
    line('Question: '."{$numberOne}{$operationArr[$operationRand]}{$numberTwo}");	
    $answer = prompt('You answer');

    if ($answer != $answerCorrect) {
         line("'{$answer}' is wrong answer ;). Correct answer was '{$answerCorrect}'");
              exit;                   
      }
      line("Correct!");

   }

      line("Congratulations, $name");	    
}


