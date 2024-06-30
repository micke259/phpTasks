<?php

//№1 Дан массив со числами. Проверьте, что все числа из этого массива содержат в себе цифру 3.

$arr_3 = [123,456,789];
$flag = true;
foreach($arr_3 as $value){
	if(!str_contains($value,"3")){
		$flag = false;
	}
}

echo $flag  ? "Заеbeetlz":"[stdClass StdClass]";

//№2 Дана строка в формате: 'kebab-case' Преобразуйте ее в формат: 'snake_case'

$n_2= 'kebab-case';
echo "<pre>";
echo str_replace('-','_',$n_2);

//№3 Дана строка в формате: 'snake_case' Преобразуйте ее в формат: 'camelCase'

$n_3 = 'snake_case_';
$temp = str_replace('_','',$n_3);
echo "<pre>";
echo str_replace(
	$n_3[stripos($n_3, '_')+1]
	, strtoupper($n_3[stripos($n_3, '_')+1]
), $temp);

//№4 Дана строка в формате: 'camelCase' Преобразуйте ее в формат: 'snake_case'

$n_4 = 'camelCaseCase';
$arr_4 = str_split($n_4);

echo "<pre>";
print_r($arr_4);

foreach($arr_4 as $key=>$value ){
	if($value!==mb_strtolower($value)){
		$arr_4[$key] = '_'.mb_strtolower($value);
	}
}

echo implode('', $arr_4);

//№5 Сформируйте с помощью циклов следующий массив:
// [
// 	[1, 2, 3],
// 	[1, 2, 3],
// 	[1, 2, 3],
// 	[1, 2, 3],
// 	[1, 2, 3],
// ]

$arr_5 = [];

for($j=0;$j<5;$j++){
	for($i=1; $i<=3;$i++){
		$arr_5[$j][]=$i; 
	}
}

print_r($arr_5);