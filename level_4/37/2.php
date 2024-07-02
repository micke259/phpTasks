<?php
//Сделайте функцию, которая параметром будет принимать два массива и возвращать массив их общих элементов.


function wtf(array $array_1, array $array_2):array{
	$result = [];
	foreach($array_1 as $key => $value){
		foreach ($array_2 as $key_2 => $value_2) {
			if($array_1[$key]===$array_2[$key_2]){
				$result[] = $value_2;
			}
		}
	}
	return $result;
}
echo "<pre>";
print_r(wtf([1,2,3],[1,2,3,4,5]));