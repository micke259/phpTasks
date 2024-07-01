<?php

//№1 Сделайте функцию, которая параметром будет принимать массив и удалять из него все дубли.

function unique(array $array): array{

	$newArr = [];
	
	for($i=0; $i<count($array);$i++){
		$flag = true;
		for($j=0; $j<count($array); $j++){
			if($array[$i]===$array[$j] && $i!==$j){
				$flag = false;
				
			}
		}
		if($flag){
			$newArr[] = $array[$i];
		}
	}
	return $newArr;
}

echo '<pre>';
print_r(unique([1,1,2,3,5,55,5,'','']));
 
