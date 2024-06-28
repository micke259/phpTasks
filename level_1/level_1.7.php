<?php
//№1

$n_1 = 'abcde';
$arr_1 = [];

for($i=0; $i<strlen($n_1);$i++){
	array_push($arr_1,$n_1[$i]);
}
echo'<pre>';
print_r($arr_1);
echo'<pre>';

//№2

$n_2 = 12345;
$arr_2 = [];
settype($n_2,'string');

for($i=0; $i<strlen($n_2);$i++){
	array_push($arr_2,$n_2[$i]);
}
echo'<pre>';
print_r($arr_2);
echo'<pre>';

//№3

$n_2 = 12345;
settype($n_2,'string');
$b_2 = strrev($n_2);

echo'<pre>';
print_r($b_2);
echo'<pre>';

//№4

$n_4 = 12345;
settype($n_4,'string');

$b_4 = [];
for($i=0; $i<strlen($n_4);$i++){
	array_push($b_4,$n_4[$i]);
}

echo'<pre>';
print_r(array_sum($b_4));
echo'<pre>';