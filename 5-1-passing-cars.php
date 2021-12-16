<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    $zeros = 0;
    $passing = 0;
    
    foreach($A as $element){
        if($element == 0){
            $zeros++;
        } else if ($element == 1) {
            $passing = $passing + $zeros;
        } if($passing > 1000000000) return -1;
    }
    return $passing;
}

print_r(solution([0,1,0,1,1]));
