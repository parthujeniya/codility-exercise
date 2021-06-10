<?php


function solution($A) {
    // write your code in PHP7.0
    $min = 1;
    sort($A);
    foreach($A as $key => $value){
        if($min == $value){
            $min++;
        }
    }
    return $min;
}


print_r(solution([1, 1, 1, 3, 6, 5, 1]));
// print_r(solution([-1,-3]));
// print_r(solution([4, 5, 6, 2]));
// print_r(solution([1,2,3]));