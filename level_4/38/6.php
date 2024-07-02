<?php
//Сделайте функцию, которая заполнит массив N случайными числами из заданного промежутка так, чтобы в массиве не было подряд двух одинаковых чисел.
require_once('../37/3.php');
function getArrayWithRandNubmers($start, $end, $length){
	$result = [];

	for( $i = 0; $i < $length; $i++ ){
		$result[] = getRandomNumber( $start, $end );
	}
    
    return $result;
}

echo "<pre>";

print_r(getArrayWithRandNubmers(0, 5, 10));