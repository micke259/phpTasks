<?php
// Сделайте функцию, которая параметром будет принимать массив с числами и заменять каждое число на массив его делителей.

function poopDivisors(array &$array){
	foreach ($array as $key=>$value) {
		$divisors = [];
		for( $i = 1; $i <= $value; $i++ ){
			if($value % $i === 0){
				$divisors[] = $i; 
			}
		}
		$array[$key] = $divisors;
		$divisors = [];
	}
}
$arr_3 =[1,2,3,4,5];
poopDivisors($arr_3);
echo "<pre>";
print_r($arr_3);
