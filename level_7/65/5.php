<?php
//Напишите программу, которая сформирует следующий массив:

$arr=[];
for($i=1;$i<=5;$i++){
	$x = array_fill(0,$i,'x');
	$arr[]=$x;
}
$arr=array_reverse($arr);
echo "<pre>";
print_r($arr);