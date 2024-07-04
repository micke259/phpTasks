<?php
require_once("../../level_4/37/3.php");
//Дан текст. По заходу на страницу покрасьте каждый символ текста в случайный цвет так, чтобы у соседних символов были разные цвета. Результат выведите в абзац.

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel sapiente nulla unde maiores vero obcaecati dolorum ut in aperiam. Ad consequatur expedita fugiat suscipit aliquam voluptates rem corporis soluta.";

$arr = mb_str_split($text);
echo "<div style='display:flex; gap:5px'>";
foreach ($arr as $value) {
	$r = getRandomNumber(0,255);
	$g = getRandomNumber(0,255);
	$b = getRandomNumber(0,255);
	$color = 'color:rgb('.$r.",".$g.",".$b.")";
	echo "<p style='{$color}'>".$value."</p>";
}