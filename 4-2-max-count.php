<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N, $A) {
    // write your code in PHP7.0
    $ittration = array_fill(0,$N,0);
    for($i = 0; $i < count($A); $i++){
        if($A[$i] > count($ittration)){
            $ittration = array_fill(0,$N,max($ittration));
        } else {
            $ittration[$A[$i] - 1]++;
        }        
    }
    return $ittration;
}

// Task score: 66% | Correctness: 100% | Performacnce: 40%
print_r(solution(5,[3,4,4,6,1,4,4]));