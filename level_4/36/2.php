<?php

//Сделайте функцию, которая сгенерирует строку заданной длины, заполненную случайными латинскими буквами.

function generateString(int $length = 10): string{
	$result = '';
	for($i=0; $i< $length; $i++){
		$result .= chr(rand(65,90));
	}
	return $result;
}

echo generateString();