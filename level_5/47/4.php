<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	function divisors(int $nubmer):array{
		$divisors = [];
		for($i = 1; $i <= $nubmer; $i++){
			if($nubmer%$i===0){
				$divisors[] = $i;
			}
		}

		return $divisors;
	}
	if(isset($_POST['number'])){
		$number = $_POST['number'];
		$str = implode(',', divisors($number));
		echo "<h1>$str</h1>";
	}
	?>
	<form action="4.php" method="post">
		<input type="text" name="number" placeholder="Введите число">
		<button submit>getDivisors</button>
	</form>
</body>
</html>

<?php
//Дана форма с инпутом. В инпут вводится число. После отправки формы получите массив делителей числа и выведите их в абзац через запятую.

