<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_GET['date'])){
			$dateArray = explode("-",$_GET['date']);
			echo "<h1>Год : $dateArray[0]</h1>";
			echo "<h2>Месяц : $dateArray[1]</h2>";
			echo "<h3>День : $dateArray[2]</h3>";
		}
	?>
	<form action="4.php" method="get">
		<input type="text" name="date">
	</form>
	
</body>
</html>

<?php
//Дана форма с инпутом. В инпут вводится дата в формате 2025-12-31. После отправки формы выведите в первый абзац год, во второй абзац - месяц, в третий день.