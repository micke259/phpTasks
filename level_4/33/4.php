<?php
//№4 Сделайте функцию, которая параметром будет принимать массив с числами и возвращать максимальное и минимальное значение из этого массива в виде следующего массива:
// [
// 	'max' => 9,
// 	'min' => 1,
// ]

function minmax(array $array):array{
	return[
		"max"=> max($array),
		"min"=> min($array),
	];
}
echo "<pre>";
print_r(minmax([1,2,3,4,5,6,7,8,9]));


function unsafeMax($arr){
	$max = $arr[0];
	foreach ($arr as $value) {
		if($value>$max){
			$max = $value;
		}
	}
}