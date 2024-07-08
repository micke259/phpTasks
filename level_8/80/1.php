<?php
//Дана форма с двумя инпутами. В инпуты вводятся числа. По отправки формы, проверьте, являются ли эти числа дружественными или нет.
function divs(int $number):array{
	$divs = [];
	for($i =1; $i < $number; $i++ ){
		if($number % $i === 0){
			$divs[] = $i;
		}
	}
	return $divs;
}

if(isset($_POST["number_1"]) && isset($_POST["number_2"])){
	$number_1 = (int)$_POST["number_1"];
	$number_2 = (int)$_POST["number_2"];

	$sumNumber_1 = array_sum(divs($number_1));
	$sumNumber_2 = array_sum(divs($number_2));

	if($sumNumber_1===$number_2 && $sumNumber_2===$number_1){
		echo "Числа $number_1 и $number_2 дружественные";
	}else{
		echo "Числа $number_1 и $number_2 не дружественные";
	}
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
	<form action="1.php" method="post">
		<input type="number" name="number_1">
		<input type="number" name="number_2">
		<button submit>friend?</button>
	</form>
</body>
</html>