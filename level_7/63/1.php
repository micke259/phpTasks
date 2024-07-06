<?php

//Дан текстовый файл. В нем записан текст и встречаются числа. Возведите каждое из этих чисел в квадрат и запишите результат обратно в этот же файл.
//todo
$text = file_get_contents("../../texts/level_7/63/1.txt");
$filtered = array_filter(
	explode(" ",
		preg_replace("/[A-z!.,?]/","", $text)
	)
	,
	fn($item)=>$item!=="");
echo "<pre>";

$updatedText = $text;

$squared = [];
$numbers = [];

foreach ($filtered as $value) {
	$nubmers[] = $value;
}



foreach ($filtered as $key =>$item) {
	$squared[] = (int)$item **2;
}

foreach ($squared as $key => $value) {
	$updatedText = preg_replace('/[0-9]/', $squared[$key], $updatedText, 1);
}


