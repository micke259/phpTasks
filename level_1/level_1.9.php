<?php

//№1

$arr_1=['123123','http://webrise.ru', 'jlsadhnjnoasd'];



echo '<pre>';
print_r($arr_1);
$arr_2_1 = array_filter($arr_1, fn($item) => substr($item,0, 7) === 'http://');
print_r($arr_2_1);
echo '<pre>';

//№2

$arr_2=['123123','http://webrise.html', 'jlsadhnjnoasd.html'];


echo '<pre>';
print_r($arr_2);
$arr_2_2 = array_filter($arr_2, fn($item) => substr($item, -5) === '.html');
print_r($arr_2_2);
echo '<pre>';

//№3

$arr_3=[12,3,66];

foreach ($arr_3 as $key => $value) {
	$arr_3[$key] = 1.1*$value; 
}

echo '<pre>';
print_r($arr_3);
echo '<pre>';