<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div style="width: 200px; height:200px; background-color:<?=getRandomColor()?>;"></div>
</body>
</html>


<?php
//Сделайте функцию, которая будет возвращать случайный цвет.

function getRandomColor(){
	$red = rand(0,255);
	$green = rand(0,255);
	$blue = rand(0,255);

	return "rgb($red,$green,$blue)";
}



