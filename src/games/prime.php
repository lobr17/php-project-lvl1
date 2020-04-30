<?php
namespace BrainGames\prime;

use function cli\line;
use function cli\prompt;

use function BrainGames\flow\gameProcess;

function isPrimeSub($question)
{
    if ($question === 1) {
                return false;
    } else {
        //перебираем возможные делители от 2 до sqrt($numberRand).              
        for ($dev = 2; $dev * $dev <= $question; $dev++ ) {
            if ($question % $dev === 0) {
                                return false;
                                break;
            } else {
                                return true;
            }
        }
    }
}

function convertBoolNorm($question)
{
    isPrimeSub($question) ? $answerCorrect = 'yes' : $answerCorrect = 'no';
    
    return $answerCorrect;
}


function isPrime()
{
    $title = 'Answer "yes" if given number is prime. Otherwise answer "no"';

    $dataGame = function ()
    {
        $question = rand(0, 100);
        
        return array ($question, convertBoolNorm($question));
    };
    gameProcess($title, $dataGame);
}


