<?php

//№1 Дана некоторая строка: 'a bc def ghij' Переведите в верхний регистр все подстроки, в которых количество букв меньше или равно трем. В нашем случае должно получится следующее: 'A BC DEF ghij'

$n_1 = 'a bc def ghij';

$arr_1 = explode(' ', $n_1);

foreach ($arr_1 as $k=> $value) {
	if(strlen($value)<=3){
		$arr_1[$k] = strtoupper($value);
	}
}

echo implode(" ",$arr_1);
//№2 Дан символ. Узнайте, в каком регистре этот символ - в верхнем или нижнем.
$a='A';
echo '<pre>';
echo ctype_upper($a);

//№3 Дано некоторое число, например, такое: 123789 Удалите из этого числа все нечетные цифры. В нашем случае получится такой результат: 28
echo '<pre>';
$n_3= 123789;
$arr_3 = str_split((string)$n_3);

echo implode(array_filter($arr_3, fn($item)=>$arr_3[$item]%2===0, ARRAY_FILTER_USE_KEY));