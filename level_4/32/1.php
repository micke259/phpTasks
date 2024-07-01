<?php

//№1 Сделайте функцию, которая параметром будет принимать число и удалять из него нули.

function deleteZeroes(string $number){
	$result = str_replace('0','', $number);
	return $result;
}

echo deleteZeroes('00012359000');