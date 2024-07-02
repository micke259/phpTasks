<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="1.php" method="get">
		<h1>Сумма чисел</h1>
		<input placeholder="Первое число" name="number_1" type="text">
		+
		<input placeholder="Второе число" name="number_2"type="text">
		<button type="submit">=</button>
	</form>
</body>
</html>

<?php
//Дана форма с двумя инпутами. В инпуты вводятся числа. После отправки формы выведите сумму введенных чисел.
if(isset($_GET['number_1']) && isset($_GET['number_2'])){
	$firstNumber = $_GET['number_1'];
	$secondNumber = $_GET['number_2'];
	if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
	    $sum = $firstNumber + $secondNumber;
	    echo "Сумма: $sum";
	}
}