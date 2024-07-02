<?php
//Сделайте функцию, которая параметром будет принимать число, а возвращать массив его делителей, являющихся простыми числами.

function getPrimeDiv(int $number):array{
	$result = [];

	for($i = 1; $i<= $number; $i++){
		if($number%$i===0){
			$flag = true;
			for($j=2; $j < $i;$j++){
				if($i%$j===0){
					$flag = false;
					break;	
				}
			}
			if($flag){
				$result[] = $i;
			}
		}
	}
	return $result;
}
echo "<pre>";
print_r(getPrimeDiv(1212));