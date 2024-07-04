<?php

//Дана строка с текстом. Получите процентное содержание каждого символа текста в виде ассоциативного массива, в котором ключами будут символы, а значениями - их процентное содержание.

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam at aperiam ipsum labore. Dolores alias eveniet dolor earum in nostrum quis distinctio commodi quasi, sint, aliquam aut saepe! Fuga, nam?";

$arr = array_count_values(mb_str_split($text));
$length = mb_strlen($text);
$procent = [];

foreach ($arr as $letter => $count) {
	$procent[$letter] = ($count/$length)*100 ."%";
}

echo "<pre>";
print_r($procent);