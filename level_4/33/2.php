<?php

//№2 Сделайте функцию, которая параметром будет принимать массив и удалять из него все дубли, которые встречаются больше трех раз.

function uniqueMore3(array $array): array{
	
	$duplicateValues = BoilerPlate($array);
	
	foreach ($array as $key=>$value){
		if($duplicateValues[$value]>3){
			unset($array[$key]);
		}
	}	
	
	return $array;
}
echo "<pre>";
$arr_2 = [1, 2, 2, 2, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 5];
print_r(uniqueMore3($arr_2));

function BoilerPlate(array $array): array{
	$result = [];
	foreach ($array as $value) {
		$result[$value] = $result[$value]+1;
	}
	return $result;
}