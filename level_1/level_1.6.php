<?php
//№1
$n_1 = [1,2,3];

foreach ($n_1 as $value) {
	echo $value**2," ";
}

echo "<pre>";

//№2
$n_2  = [1,2,3];

foreach ($n_2  as $value) {
	echo sqrt($value)." ";
}
echo "<pre>";
//№3
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
//№4
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