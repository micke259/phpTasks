<?php
//Сделайте функцию, которая параметром будет принимать двухмерный массив чисел и возвращать массив максимальных чисел в каждом подмассиве.

function watafak(array $array): array {
	$max = [];
	foreach ($array as $value) {
		$max[] = max($value);
	}
	return $max;
}

$array = [
	[1,2,8],
	[2,3,5],
	[3,4,123],
];
echo "<pre>";
print_r(watafak($array));