<?php
//Сделайте функцию, которая параметром будет получать строку со словами, а возвращать строку в верхнем регистре, состоящую из первых букв слов.

function weirDo(string $words) : string{
	$uppercases = ucwords($words);
	$result  = "";
	$uppercasesArray = explode(" ", $uppercases);
	foreach ($uppercasesArray as $uppercase) {
		$result .= $uppercase[0];
	}

	return $result;
}

echo weirDo("Funny Upper Case Keyword");