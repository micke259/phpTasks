<?php
//Дан текстовый файл со словами и с дробями вида 1/2. Напишите программу, которая обернет каждую дробь в свой тег span. Результат запишите в новый файл.
$text = file_get_contents("../../texts/level_7/61/4.txt");
$array = array_filter(explode(" ", $text), fn($item)=>$item==="1/2");

foreach($array as $key=>$value){
	$array[$key] = "<span>".$value."</span>";
}

file_put_contents("../../texts/level_7/61/4_new.txt",implode(" ", $array));