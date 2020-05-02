<?php
namespace BrainGames\prime;

use function cli\line;
use function cli\prompt;

use function BrainGames\flow\startProcessEngine;

function isPrimeSub($question)
{
    if ($question === 1 or $question === 0) {
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

function prime()
{
    $title = 'Answer "yes" if given number is prime. Otherwise answer "no"';
    $getDataGame = function ()
    {
        $question = rand(0, 100);
        return array ($question, isPrimeSub($question) ? 'yes' : 'no');
    };
    startProcessEngine($title, $getDataGame);
}
