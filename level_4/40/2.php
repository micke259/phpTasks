<?php
//Сделайте функцию, которая параметром будет принимать массив и перемешивать элементы этого массива в случайном порядке.

function arrayipasdjasij(array $array) {
	shuffle($array);
	return $array;
}

$arr = [1,23,412,12,12,124];
echo "<pre>";
print_r(arrayipasdjasij($arr));