<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($X, $Y, $D) {
    // write your code in PHP7.0
    $jumps = ceil(($Y-$X)/$D);
    return $jumps;
}

// Task score: 100% | Correctness: 100% | Performacnce: 100%
print_r(solution(10,85,30));