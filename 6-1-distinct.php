<?php


function solution($A) {
    // write your code in PHP7.0
    return count(array_unique($A));
}

print_r(solution([2,1,1,2,3,1]));