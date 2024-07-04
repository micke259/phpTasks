<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_GET["last"])) {
			$arr = mb_str_split($_GET["last"]);
			$length= count($arr)-1;
			echo"<h1>{$arr[$length]}</h1>";
		}
	?>
	<form action="2.php" method="get">
		<input type="text" name="last">
	</form>
</body>
</html>

<?php
//Дана форма с инпутом. В инпут вводится строка. После отправки формы выведите в абзац последний символ введенной строки.