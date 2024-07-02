<?php
//Сделайте функцию, которая заполнит массив N случайными числами из заданного промежутка так, чтобы числа не повторялись.

function getRandomNumbersArray($start, $end, $length){
	$result = [];
    $range = range($start, $end);

	if($length > count($range)){
		throw new Exception("Ты долбаёб");
	}

	shuffle($range);

	$result = array_slice($range, 0, $length);

	return $result;
}
echo "<pre>";
print_r(getRandomNumbersArray(1,10,5));