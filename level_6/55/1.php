<?php
	if(isset($_POST['birthDate'])){
		$now = new DateTime();
		$birthDate = new DateTime($_POST['birthDate']);
		$age = $now->diff($birthDate)->y;
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
		<label for="birthDate">Введите свою дату рождени в формате год-месяц-день</label>
		<input type="text" name="birthDate">
	</form>
	<?php
		echo"Вам $age полных лет";
	?>
</body>
</html>

<?php
//Дана форма с инпутом. В инпут вводится дата рождения юзера в формате год-месяц-день. После отправки формы выведите в абзац, сколько полных лет юзеру.