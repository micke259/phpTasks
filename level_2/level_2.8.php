<?php

//№1 Дана строка с буквами. Проверьте, что в этой строке не более двух заглавных букв.

$n_1 = 'ХуйфопаuовнофывфывAAA';

echo '<pre>';

function cum(string $string){
	$array = mb_str_split($string);
	$count = 0;
	foreach($array as $key => $value){
		if (mb_strtoupper($value)==$array[$key]){
			$count++;
		}
		
	}
	if($count >=2 )	{
		echo 'В строке более 2-х заглавных букв';
	}else{
		echo '[object Object]';
	}
}

echo cum($n_1);

//№2 Дана некоторая строка: '1 22 333 4444 22 5555 1' Удалите из этой строки все подстроки, в которых количество символов больше трех. В нашем случае должно получится следующее: '1 22 333 22 1'

$n_2 = '1 22 333 4444 22 5555 1';
echo "<pre>";

echo (implode(' ', array_filter(explode(' ', $n_2), fn($item)=>mb_strlen($item)<=3)));

//№3 Даны два массива: $arr1 = [1, 2, 3]; $arr2 = ['a', 'b', 'c']; Слейте эти массивы в новый массив следующим образом: [1, 2, 'a', 'b', 'c', 3]
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];

function cum2(array $array1 , array $array2):array{
	$retarded = array_slice($array1,0,2);
	$whatever = array_slice($array1,2,1);
	
	return array_merge($retarded, $array2 ,$whatever);

}
echo '<pre>';
print_r(cum2($arr1, $arr2));