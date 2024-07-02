<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="3.php" style="display:flex; flex-direction:column; gap:2em; width:300px " method="get">
		<input name="input"type="text" placeholder="введите строку">
		<button type="submit">Посчитать количество символов в строке</button>
	</form>
</body>
</html>

<?php
//Дана форма с кнопкой и инпутом. В инпут вводится строка. По нажатию на кнопку определите, сколько символов в введенной строке.

if(isset($_GET['input'])){$input = $_GET['input'];

echo mb_strlen($input);}