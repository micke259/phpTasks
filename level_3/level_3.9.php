<?php

//№1 Дана строка. Проверьте, что эта строка состоит только из цифр.

$n_1 ='123123длапвттд';
$arr_1 = mb_str_split($n_1);
$flag = true;
foreach($arr_1 as $value){
	if(!is_numeric($value)){
		$flag = false;
		break;
	}
}

echo $flag ? 'эта строка состоит только из цифр':'эта строка состоит не только из цифр';

//№2 Дана строка. Проверьте, что эта строка состоит только из четных цифр.
$n_2 ='122asdasd';
$arr_2 = mb_str_split($n_2);
$flag = true;
foreach($arr_2 as $value){
	if(!is_numeric($value) || (int)$value%2!==0){
		$flag = false;
		break;
	}
}
echo "<pre>";

echo $flag ? "norm":"segfault";

//№3 Дан массив со числами. Удалите из него числа, имеющие два и более нуля.

$arr_3 = [1,200,3000,123,435435,300000];

echo "<pre>";
print_r(array_filter($arr_3, fn($item)=>$item%100!==0));

//№4 Найдите все числа от 1 до 1000, сумма цифр которых равна 13.

for($i=49; $i<=940; $i++){
	if(array_sum(str_split($i))===13){
		echo $i.PHP_EOL;
	}
}

//№5 Сформируйте с помощью циклов следующий массив:
// [
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// ]

$arr_5 =[];
$item = 0;
for($i=0; $i<3; $i++){
	for($j=1; $j<=3; $j++){
		$item++;
		$arr_5[$i][] = $item;
	}
}

print_r($arr_5);