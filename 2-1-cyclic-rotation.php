<?php

function solution($A, $K){

    /***
     * Steps
     * 1. Assign last element to temp variable
     * 2. Shift each element to n + 1 index.
     * 3. Assign temp to 0th index of array.
     * 4. Do 1 to 3 until $K = 0
     */
    while($K > 0){
        $size = count($A) - 1;
        $tmp = $A[$size];
        while($size > 0){
            $A[$size] = $A[$size-1];
            $size--;
        }
        $A[0] = $tmp;
        $K--;    
    }
    return $A;
}
