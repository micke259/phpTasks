<?php
//№1 Заполните массив случайными числами из промежутка от 1 до 100.

$arr_1 = [];

for( $i = 0; $i < 50; $i++){
	array_push($arr_1, rand(1,100));
}

echo"<pre>";
print_r($arr_1);
echo "<pre>";

//№2 Дано некоторое число: Выведите в консоль все его символы с конца.

$n_2= '12345';
$b_2=strrev($n_2);

echo "<script>console.log('$b_2')</script>";
//№3 Дан некоторый массив, например, вот такой: [1, 2, 3, 4, 5, 6] По очереди выведите в консоль подмассивы из двух элементов нашего массива:
//[1, 2]
//[3, 4]
//[5, 6]

$arr_3=[1,2,3,4,5,6];

for ($i = 0; $i < count($arr_3); $i += 2) {
    
    $subarray = array_slice($arr_3, $i, 2);
    
    print_r($subarray);
}

//№4Даны два массива:
//$arr1 = [1, 2, 3];
//$arr2 = [4, 5, 6];
//Слейте эти массивы в новый массив: [1, 2, 3, 4, 5, 6]
$arr4_1 = [1, 2, 3];
$arr4_2 = [4, 5, 6];
echo '<pre>';
print_r (array_merge($arr4_1, $arr4_2));
echo '<pre>';