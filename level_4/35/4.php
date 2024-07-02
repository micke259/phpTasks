<?php
// Сделайте функцию, которая параметрами будет принимать два числа и возвращать массив, заполненный целыми числами от минимального параметра до максимального.

function weirdFill(int $start, int $end): array{
	$result = [];

	for($i=$start; $i<=$end; $i++){
		$result[] = $i;
	}
	return $result;
}
echo "<pre>";
print_r( weirdFill(1,9));