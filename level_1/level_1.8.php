<?php

//№1

$arr_1 = [];

for( $i = 1; $i <= 10; $i++){
	array_push($arr_1, $i);
}

echo '<pre>';
print_r($arr_1);
echo '<pre>';

//№2

$arr_2 = [];

for( $i = 1; $i <= 100; $i++){
	if($i%2===0)array_push($arr_2, $i);
}

echo '<pre>';
print_r($arr_2);
echo '<pre>';
//№3

$arr_3 = [1.456, 2.125, 3.32, 4.1, 5.34];

foreach( $arr_3 as $key =>$i){
	$arr_3[$key] = round($i,1);
}

echo '<pre>';
print_r($arr_3);
echo '<pre>';