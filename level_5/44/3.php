<?php
	if(isset($_POST['email'])){
		$email = $_POST['email'];

		echo !filter_var($email, FILTER_VALIDATE_EMAIL) ? 'Ваш E-mail хуёвый':$email;
		echo "<br>";
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
	<form action="3.php" method="post">
		<input type="text" placeholder="Введите E-mail" name="email">
	</form>
</body>
</html>

<?php
//Дана форма с инпутом. В инпут вводится email. После отправки формы проверьте, корректный email или нет и выведите информацию об этом на экран.