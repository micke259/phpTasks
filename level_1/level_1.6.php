<?php
//№1 Дан массив с числами. Найдите сумму квадратов элементов этого массива. +
$n_1 = [1,2,3];

foreach ($n_1 as $value) {
	echo $value**2," ";
}
$arr = array_reduce($n_1, function($carry, $value) {
	$carry[] = $value**2;
}, []);
echo array_sum($arr);
echo "<pre>";

//№2 Дан массив с числами. Найдите сумму квадратных корней элементов этого массива. +
$n_2  = [1,2,3];

foreach ($n_2  as $value) {
	echo sqrt($value)." ";
}
echo "<pre>";
//№3 Дан массив с числами. Найдите сумму положительных элементов этого массива. +
$n_3  = [-1,2,3];

function NonNegativeSum(array $array){
	$count=0;
	foreach ($array as $value) {
		$value>0 ? $count+=$value: $count+=0; 
	}

	return $count;
}
echo NonNegativeSum($n_3);
echo "<pre>";
//№4 Дан массив с числами. Найдите сумму тех элементов этого массива, которые больше нуля и меньше десяти. +
$n_4  = [-1,2,3,25];

function xDsum(array $array){
	$count=0;
	foreach ($array as $value) {
		if($value >0 && $value<10){
			$count+=$value;
		} 
	}

	return $count;
}
echo xDsum($n_4);
echo "<pre>";