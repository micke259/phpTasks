<?php
//Дан текстовый файл. Получите количество букв в нем (т.е. без пробелов, знаков препинаний и т.п.).
$text = trim(file_get_contents("../../texts/level_7/62/1.txt"));
$temp = preg_replace("/[,!?.]/","", $text);
echo mb_strlen(
	implode(
		explode(" ", $temp)
	)
);