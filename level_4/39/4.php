<?php
//Сделайте функцию, которая параметром будет принимать массив чисел и возвращать массив общих делителей всех чисел из переданного массива.

function xD(array $array): array {
	$min = min($array);

	$commonDOV = [];

	for($i=1; $i<=$min;$i++){
		$flag = true;
		foreach($array as $value){
			if($value % $i!==0){
				$flag = false;
				break;
			}
		}
		if($flag){
			$commonDOV[] = $i;
		}
	}
	return $commonDOV;
}

$arr = [12,14,16,18,20];
echo "<pre>";
print_r(xD($arr));