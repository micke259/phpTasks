<?php
// Сделайте функцию, которая параметром будет принимать массив с числами и возвращать второе по величине число.

function getPrevMax(array $arr): int {
	$max = max($arr);
	$result = 0;
	foreach($arr as $value){
		if($value < $max && $value > $result){
			$result = $value;
		}
	}
	return $result;
}

echo getPrevMax([1,2,3,4,5]);