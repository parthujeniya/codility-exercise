<?php

function solution($A) {
    // write your code in PHP7.0
    arsort($A);
    return array_product(array_splice($A, 0, 3));
}


print_r(solution([-3,1,2,-2,5,6]));