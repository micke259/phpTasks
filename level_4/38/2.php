<?php
//Сделайте функцию, которая параметром будет принимать массив и возвращать массив из N случайных элементов этого массива.
require_once('./1.php');

function getRandomItemsArray(array $array, $length): array {
	$result=[];
	for ($i = 0; $i < $length; $i++){
		$result[] = getRandomItemOfArray($array);
	}
	return $result;
}

echo "<pre>";
print_r(getRandomItemsArray([1,2,3,4,5,'qwerty','Z'], 10));