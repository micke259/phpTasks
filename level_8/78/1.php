<?php
//Дана форма с инпутом. В инпут вводится число. По отправки формы, проверьте, является ли это число совершенным.

function divs(int $number):array{
	$divs = [];
	for($i =1; $i < $number; $i++ ){
		if($number % $i === 0){
			$divs[] = $i;
		}
	}
	return $divs;
}

if(isset($_POST["number"])){
	$number = (int)$_POST["number"];
	$sum = array_sum(divs($number));
	echo $sum === $number ? "Число $number является совершенным":"Число $number не является совершенным";
	
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
		<input name="number" type="number">
	</form>
</body>
</html>