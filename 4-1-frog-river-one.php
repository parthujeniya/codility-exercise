<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($X, $A) {
    
    for($i = 0; $i < count($A); $i++ ){
        if(!isset($positoinCovered[$A[$i]])){
            $X--;
            $positoinCovered[$A[$i]] = true;
        }
        if($X == 0){
            return $i;
        }
    }
    
    return -1;
}


print_r(solution(1,[1]));
print_r(solution(5,[1,3,1,4,2,3,5,4]));
print_r(solution(2,[2,2,2,2,2]));
