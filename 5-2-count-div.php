<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A, $B, $K) {
    // write your code in PHP7.0
    if($A%$K==0) {
			$result = floor(($B-$A)/$K)+1;
		} else {
			$result = floor($B/$K-(floor($A/$K)+1))+1;
		}
		return (int)$result;
}


print_r(solution(6,11,2));