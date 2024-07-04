
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_POST["year"])){
			$year = (int)$_POST["year"];
			echo checkdate(2,29, $year) ? "этот год високосный": "фывфывфв";
		}
	 	
	?>
	<form action="3.php" method="post">
		<input type="text" name="year">
		<button submit >asd</button>
	</form>
</body>
</html>
<?php
//Дана форма с инпутом. В инпут вводится год. После отправки формы определите, введен високосный год или нет и выведите информацию об этом в абзац.