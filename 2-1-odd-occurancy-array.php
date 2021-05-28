<?php

function solution($A) {

    /**
     * Steps
     * 1. Find occurance in array using array_count_values
     * 2. make forloop and select which is occured 1s ( using $v = 1)
     * 3. Return array with matching key
     */
    $counts = array_count_values($A);

	foreach( $counts as $k=>$v ) {
		if( $v==1 ) {
			return $k;
		}
	}

    return $A[$k];
}