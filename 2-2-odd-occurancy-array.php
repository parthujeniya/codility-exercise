<?php

function solution($A) {

    $count = array();
	foreach($A as $key=>$value){
		if(!isset($count[$value])){
			$count[$value]=1;
		}
		else if( $count[$value]===1 ){
			unset($count[$value]);
		}
	}
	return key($count);
}


print_r(solution([9,3,9,3,9,7,9]));