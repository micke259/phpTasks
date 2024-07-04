<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="4.php" method="post">
		<input type="text" name="a">
	</form>
	<?php
		if(isset($_POST['a'])){
			echo array_sum(explode(',',$_POST['a']));
		}
	?>
</body>
</html>

<?php
//Дана форма с инпутом. В инпут через запятую вводятся числа. После отправки формы найдите сумму введенных чисел и выведите ее в абзац.