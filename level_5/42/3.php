<?php
//Дана форма с кнопкой и двумя инпутами. В инпуты вводятся целые числа. После отправки формы определите, какое из введенных чисел больше и выведите его на экран.
if(isset($_GET["number_1"]) && $_GET["number_2"]){
	$nubmer_1 = $_GET["number_1"];
	$nubmer_2 = $_GET["number_2"];

	echo $nubmer_1 > $nubmer_2 ? "$nubmer_1 больше $nubmer_2 ":"$nubmer_2 больше $nubmer_1";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="3.php" method="get">
		<input type="text" name="number_1">
		<input type="text" name="number_2">
		<button type="sumbit">Проверить</button>
	</form>
</body>
</html>