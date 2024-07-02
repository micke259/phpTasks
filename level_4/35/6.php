<?php
// Сделайте функцию, которая будет возвращать сумму N первых чисел Фибоначчи.

function sumOfFibonacci(int $length = 10): int{
	if ($length<=0){
		return 0;
	}
	if ($length===1){
		return 1;
	}
	
	$left =0;
	$right = 1;
	$sum = $left + $right;

	for($i= 2; $i<$length; $i++ ){
		$next = $left + $right;
		$sum += $next;
		$left = $right;
		$right = $next;
	}
	return $sum;
}

echo sumOfFibonacci();