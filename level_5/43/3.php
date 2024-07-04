<?php
	if(isset($_POST['string'])){
		$string = $_POST['string'];
		$length = mb_strlen($_POST['string']);
		echo "<p>В строке $string $length символов</p>";
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
		<input type="text" name="string">
		<button type="submit">kopjsda</button>
	</form>
</body>
</html>


<?php
//Дана форма с кнопкой и инпутом. В инпут вводится строка. По нажатию на кнопку определите, сколько символов в введенной строке.