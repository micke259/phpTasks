<?php
// Дан следующий массив:

// <?php
// 	$arr = [1, 2, 3, 4, 5, 6];
// 
// Дано также число:
// 	$num = 3;
// 
// Добавьте в приведенный массив столько пустых строк, чтобы длина массива стала равна квадрату числа из переменной.

$arr = [1, 2, 3, 4, 5, 6];

$num  =3 ;

while(count($arr)< $num**2){
	$arr[]='';
}
echo "<pre>";
print_r($arr);
