<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    return (((count($A)+1)*( count($A) + 2)) / 2) - array_sum($A);
}

// Task score: 100% | Correctness: 100% | Performacnce: 100%
print_r(solution([2,3,1,5]));