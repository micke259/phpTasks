<?php

//№1 Дан массив со строками. Оставьте в этом массиве только те строки, которые начинаются на http://.

$arr_1=['123123','http://webrise.ru', 'jlsadhnjnoasd'];



echo '<pre>';
print_r($arr_1);
$arr_2_1 = array_filter($arr_1, fn($item) => substr($item,0, 7) === 'http://');
print_r($arr_2_1);
echo '<pre>';

//№2 Дан массив со строками. Оставьте в этом массиве только те строки, которые заканчиваются на .html.

$arr_2=['123123','http://webrise.html', 'jlsadhnjnoasd.html'];


echo '<pre>';
print_r($arr_2);
$arr_2_2 = array_filter($arr_2, fn($item) => substr($item, -5) === '.html');
print_r($arr_2_2);
echo '<pre>';

//№3 Дан массив с числами. Увеличьте каждое число из массива на 10 процентов.

$arr_3=[12,3,66];

foreach ($arr_3 as $key => $value) {
	$arr_3[$key] = 1.1*$value; 
}

echo '<pre>';
print_r($arr_3);
echo '<pre>';