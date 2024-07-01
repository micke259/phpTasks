<?php

//№6 Сделайте функцию, которая заполнит массив N случайными числами из заданного промежутка.

function cum(array &$array, int $count, $startValue, $endValue){
	for($i=0; $i< $count;$i++){
		$array[] = rand($startValue, $endValue);
	}
}
$arr = [];
cum($arr, 5, -20, 20);
echo "<pre>";
print_r($arr);