<?php
//Сделайте функцию, которая параметром будет принимать массив и элемент и возвращать следующий за ним элемент. Смотрите пример:

// $arr = [1, 2, 3, 4, 5];

// func($arr, 1); // 2
// func($arr, 4); // 5
// func($arr, 5); // 1

$arr = [1,2,3,4,5];

function echoNextElementOfArray(array $array, int $offset):mixed{
	$index = array_search($offset, $array);

	$nextIndex = ($index+1) % count($array);

	return $array[$nextIndex];
}

echo echoNextElementOfArray($arr, 5);