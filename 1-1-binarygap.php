<?php

function solution($N) {

    /**
     * Steps
     * 0. Stricly validate for binary range.
     * 1. Convert DECIMAL to BINARY and TRIM 0s
     * 2. Convert 0s string to array by explode by '1'
     * 3. Array map to find string length of each element and return
     * 4. Find max from array.
     */
    if($N >= 0 && $N <= 2147483648){
        return max(array_map( function($element){ return strlen($element); }, explode(1,trim(decbin($N),0))));
    } else {
        return 0;
    }
}