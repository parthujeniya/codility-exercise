<?php


function solution($A) {
    // write your code in PHP7.0
    if($A == NULL) return 0;

    if(count($A) < 3) return 0;

    sort($A);

    for($i = 0; $i < count($A) - 2; $i++){
        if($A[$i] + $A[$i+1] > $A[$i+2]) return 1;
    }

    return $A;
}



print_r(solution([10,2,5,1,8,20])); // Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 8 [4] => 10 [5] => 20 )

