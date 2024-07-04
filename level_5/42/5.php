<?php
	if(isset($_POST["h_1"])){
		$h_1 = $_POST['h_1'];
		$array = mb_str_split($h_1);
		$result = implode(array_reverse($array));

		echo "<h1>$result</h1>";
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
	<form action="5.php" method="POST">
		<input type="text" name="h_1" placeholder="Переверни">
		<button type="submit">перевернуть</button>
	</form>
</body>
</html>

<?php
//Дана форма с кнопкой и инпутом. В инпут вводится слово. После отправки формы переверните слово и запишите его в абзац.