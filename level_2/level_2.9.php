<?php

//№1 Дано некоторое число: 123456 Найдите сумму пар цифр этого числа. В нашем случае имеется ввиду следующее: 12 + 34 + 56

$n_1 = '123456';
echo "<pre>";
echo (array_sum(mb_str_split($n_1, 2)));

//№2 Дан массив с числами: [1, 2, 3, 4, 5] Выведите в консоль элементы этого массива в обратном порядке.

$arr_2 = [1, 2, 3, 4, 5];

for ($i = count($arr_2)-1; $i>=0 ; $i--){
	echo "<pre>";
	echo $arr_2[$i];
}
