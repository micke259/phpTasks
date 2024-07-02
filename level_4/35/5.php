<?php
// Сделайте функцию, которая заполнит массив случайными латинскими буквами.

function weirdLettersFill(int $size = 10) : string {
	$result = [];
	$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$bukvas = mb_str_split($str);
	for ($i = 0; $i < $size; $i++){
		$letter = $bukvas[rand(0, count($bukvas) -1)];
		$result[] = $letter;
	}

	return implode($result);
}

echo '<pre>';
print_r( weirdLettersFill());