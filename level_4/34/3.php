<?php

// №3 Сделайте функцию, которая параметром будет принимать число, а возвращать массив его делителей.

function cum(int $number): array{
	$result = [];

	for ($i = 1; $i <= $number; $i++){
		if($number%$i=== 0){
			$result[] = $i;
		}
	}
	return $result;
}

$n_3 = 65535;
echo "<pre>";
print_r(cum($n_3));