<?php

//№1

function counter():int{
	$count = 0;
	for( $i = 1; $i < 100; $i++ ){
		$count+=$i;
	}
	return $count;
}


echo counter();
echo "<pre>";

//№2

function counterEven():int{
	$count = 0; 
	for( $i = 1; $i < 100; $i++ ){
		if($i%2===0){
			$count+=$i;
		}
	}
	return $count;
}


echo counterEven();
echo "<pre>";

//№3

function counterNotEven():int{
	$count = 0; 
	for( $i = 1; $i < 100; $i++ ){
		if($i%2!==0){
			$count+=$i;
		}
	}
	return $count;
}


echo counterNotEven();
echo "<pre>";

//№4

$n_4 = 5;
$b_4 = 4;

echo $n_4%$b_4;
echo "<pre>";

//№5

$n_5= "[object Object]";
for( $i = strlen($n_5)-1; $i >-1 ; $i--){
	echo $n_5[$i]."";
}
