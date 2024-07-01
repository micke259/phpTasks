<?php

//№1 Сделайте функцию, которая параметром будет принимать число, а количество его делителей.

function cum(int $number): int {
	$count = 0;
	for($i=1; $i<$number; $i++){
		if($number%$i===0){
			$count++;
		}
	}
	return $count;
}
$n_1 = 65535;
echo cum($n_1);