<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    
    $left = $A[0];
    $right = array_sum($A) - $A[0];
    
    $result = abs($left - $right); 

    for($i = 1; $i < count($A) - 1; $i++){
        $left += $A[$i];
        $right -= $A[$i];
        $result = min($result, abs($left-$right));
    }

    return $result;
}

// Task score: 100% | Correctness: 100% | Performacnce: 100%
print_r(solution([3,1,2,4,3]));