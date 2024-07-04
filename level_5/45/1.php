<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="1.php" method="get">
		<input type="text" name="start" placeholder="начало">
		<input type="text" name="end" placeholder="конец">
		<button type="submit">отправить</button>
	</form>

	<?php
		if(isset($_GET["start"]) && $_GET["end"]){
			$start = $_GET["start"];
			$end = $_GET["end"];
			$arr = range($start,$end);
			foreach ($arr as $value) {
				echo $value;
				echo"<pre>";
			}
		}
	?>
</body>
</html>

<?php
//Дана форма с двумя инпутами. В инпуты вводятся числа. После отправки формы заполните массив целыми числами от первого введеного числа до последнего.