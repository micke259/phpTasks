<?php

//№6 Сделайте функцию, которая параметром будет принимать число, а возвращать сумму его делителей.

function getDivisorsSum(int $number){
	$divisorsSum = 0;
	for($i=1;$i<=$number; $i++){
		if ($number % $i ===0){
			$divisorsSum+=$i;
		}
	}
	return $divisorsSum;
}

echo getDivisorsSum(4);