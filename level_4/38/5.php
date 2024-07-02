<?php
//Сделайте функцию, которая параметрами будет принимать любое количество чисел, а возвращать их сумму.

function getSum(...$nubmers):int{
	$sum = 0;
	foreach($nubmers as $value) {
		$sum += $value;
	}
	return $sum;
}

echo getSum(1,2,3,4,5,6,7,8);