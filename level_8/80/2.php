<?php
// Дан некоторый массив:
// 	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

// Дана переменная:

// 	$n = 3;

// Превратите этот массив в двухмерный, по $n элементов в подмассиве.


$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$n = 3;
$result = [];

for ($i = 0; $i < count($arr); $i+=$n){
	$result[] = array_slice($arr, $i, $n);
}


echo "<pre>";
print_r($result);