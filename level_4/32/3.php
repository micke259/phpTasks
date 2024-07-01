<?php

//№3 Сделайте функцию, которая вернет массив всех високосных годов за предыдущие сто лет.

function getYears(int $years = 100):array{
	$currentYear = (int)date("Y");

	$startYear = $currentYear - $years;

	$result = [];
	for($i = $startYear; $i <= $currentYear; $i++){
		if(checkdate(2,29 , $i)) {
			$result[] = $i;
		}
	}

	return $result;
}
echo '<pre>';
print_r(getYears());