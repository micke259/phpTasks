<?php
//№1 Выведите в консоль все числа в промежутке от 10 до 1000, у которых предпоследняя цифра четная.

for($i=10;$i<=1000;$i++){
	if(((string)$i)[-2]%2==0){
		echo $i.' ';
	}
}

//№2 Дан массив. Удалите из него каждый пятый элемент.
echo '<pre>';
$arr_2 = [1,2,3,4,5,1,2,3,4,5];

for($i=4; $i<count($arr_2); $i+=5){
	$arr_2[$i]= null;
}

print_r($arr_2);

//№3 Дана некоторая переменная с числом: $num = 5; Сделайте строку, содержащую столько нулей, сколько указано в переменной. В нашем случае получится такая строка: '00000'
$num = 5;
$str= "";
for( $i= 0; $i<$num; $i++){
	$str .="0";
}

echo $str;

//№4 Дана некоторая строка со словами: 'aaa bbb ccc eee fff' Удалите из этой строки каждое второе слово. В нашем случае должно получится следующее: 'aaa ccc fff'

$n_4 = 'aaa bbb ccc eee fff';
$arr_4= explode(" ", $n_4);

for($i=1; $i<count($arr_4); $i+= 2){
	$arr_4[$i]= null;
}
echo '<pre>';
print_r(implode(" ", $arr_4));

//№5 Дан массив:
// [
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// ]
//Найдите сумму элементов этого массива.

$arr_5 = 
[
	[1, 2, 3],
	[4, 5, 6],
	[7, 8, 9],
];
$sum = 0;
foreach($arr_5 as $value){
	$sum += array_sum($value);
}
echo "<pre>";
echo $sum;