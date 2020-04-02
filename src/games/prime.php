<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;

function prime()
{   
    $numberRand = rand(0, 100);

    $prime = gmp_prob_prime($numberRand);
    
    if ($prime === 0 ) {
    	$answerCorrect = 'no';
    } elseif ($prime === 1 or $prime === 2) {
        $answerCorrect = 'yes';
    }
	
    return array ($answerCorrect, $numberRand);     
}


