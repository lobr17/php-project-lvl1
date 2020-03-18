<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;

function prime($number)
{      
    $prime = gmp_prob_prime($number);
    
    if ($prime === 0 ) {
    	$answerCorrect = 'no';
    } elseif ($prime === 1 or $prime === 2) {
        $answerCorrect = 'yes';
    }
	
    return $answerCorrect;     
}


