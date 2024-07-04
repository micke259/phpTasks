
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="2.php" method="post">
		<label for="birthDate">Введите свой день рождения в формате год-месяц-день</label>
		<input type="text" name="birthDate">
		<button>Узнать количество дней до следующего др</button>
	</form>
	<?php
		if(isset($_POST["birthDate"])){
			$birthDate = new DateTime($_POST["birthDate"]);
			$nextBirth = new DateTime($_POST["birthDate"]);
			$nextBirth->modify('+' . (date('Y') - $birthDate->format('Y')) . ' years');
			$nextBirth->modify('+1 year');
			$now = new DateTime();
			$diff = $now->diff($nextBirth);
			
			echo "До следующего дня рождения осталось: ".$diff->days." дней";
			
			
		}
	?>
</body>
</html>
<?php
//Спросите у пользователя день его рождения в формате 2025-12-31. После отправки формы выведите, сколько дней осталось до его ближайшего Дня Рождения.