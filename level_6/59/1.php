<?php
	if(isset($_POST["date_1"]) && isset($_POST["date_2"])){
		$date_1 = new DateTime($_POST["date_1"]);
		$date_2 = new DateTime($_POST["date_2"]);
		$interval = $date_1->diff($date_2);
		echo "Между этими датами ".$interval->d." дней разницы";
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
	<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
		<input type="text" name="date_1" placeholder="Введите дату">
		<input type="text" name="date_2" placeholder="Введите дату">
		<button submit>sub</button>
	</form>
</body>
</html>

<?php
//Дана форма с двумя инпутами. В инпуты вводятся даты. Выведите в абзац, сколько дней между введенными датами.