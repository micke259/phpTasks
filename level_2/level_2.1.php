<?php
//№1 Дана некоторая строка. Найдите позицию первого нуля в строке.
echo '<pre>';
$n_1="-90823-20";

echo strpos($n_1, "0");
echo '<pre>';
//№2 Выведите в консоль все числа в промежутке от 1 до 1000, сумма первой и второй цифры которых равна пяти.

for( $i= 10; $i< 1000; $i++ ){
	$number  = (string)$i;
	if($number[0]+$number[1]==5){
		echo $number." ";
	}
}

//№3 Дан массив. Удалите из него элементы с заданным значением.

$arr_3 = [1, '23', true, [],];

function deleteItemFromArray(mixed $item ,array $array):array {
	return array_filter($array, fn($elem)=>$elem !==$item);
}
echo'<pre>';
print_r(deleteItemFromArray(true, $arr_3));
echo'<pre>';
 
//№4 Дан некоторый массив, например, вот такой: [1, 2, 3, 4, 5, 6] Найдите сумму первой половины элементов этого массива.
$arr_4 = [1, 2, 3, 4, 5, 6];

echo array_sum(array_slice($arr_4,0,count($arr_4)/2)) .'';