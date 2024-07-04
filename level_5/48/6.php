<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="6.php" method="post">
		<input type="text" name="a">
	</form>
	<?php
		if(isset($_POST['a'])){
			$left = array_slice(mb_str_split($_POST['a']),0,3);
			$right = array_slice(mb_str_split($_POST['a']),3);

			echo array_sum($left)===array_sum($right) ? "счастливый билет":"лох";
		}
	?>
</body>
</html>

<?php
//Дана форма с инпутом. В инпут вводится число из шести цифр. После отправки формы проверьте, что число представляет собой счастливый билет, то есть сумма первых трех цифр равна сумме вторых трех цифр.