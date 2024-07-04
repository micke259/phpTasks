<?php
	require_once('./4.php');
	function getCommonDivisors(int $number_1,int $number_2 ):array {
		$arr_1 = divisors($number_1);
		$arr_2 = divisors($number_2);

		return array_intersect($arr_1, $arr_2);
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
	<form action="5.php" method="post">
		<input type="text" name="number_1">
		<input type="text" name="number_2">
		<button submit >Общие делители</button>
	</form>
	<ul>
		<?php
			if(isset($_POST['number_1']) && isset($_POST['number_2'])){
				$number_1 = (int)$_POST['number_1'];
				$number_2 = (int)$_POST['number_2'];

				$data = getCommonDivisors($number_1, $number_2);
				foreach ($data as $value) {
					echo "<li>$value</li>";
				}
			}
		?>
	</ul>
</body>
</html>

<?php
//Дана форма с двумя инпутами. В инпуты вводятся числа. После отправки формы получите массив общих делителей этих чисел и выведите их в виде списка ul.
