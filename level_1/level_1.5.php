<?php

//№1 Найдите сумму всех целых чисел от 1 до 100.

function counter():int{
	$count = 0;
	for( $i = 1; $i < 100; $i++ ){
		$count+=$i;
	}
	return $count;
}


echo counter();
echo "<pre>";

//№2 Найдите сумму всех целых четных чисел в промежутке от 1 до 100.

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

//№3 Найдите сумму всех целых нечетных чисел в промежутке от 1 до 100.

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

//№4 Даны два целых числа. Найдите остаток от деления первого числа на второе.

$n_4 = 5;
$b_4 = 4;

echo $n_4%$b_4;
echo "<pre>";

//№5 Дана некоторая строка. Переберите и выведите в консоль по очереди все символы с конца строки.

$n_5= "[object Object]";
for( $i = strlen($n_5)-1; $i >-1 ; $i--){
	echo $n_5[$i]."";
}
