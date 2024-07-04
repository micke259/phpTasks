<?php

if(isset($_GET["number"])){
	$number = $_GET["number"];
	$str = '';

	for($i=0; $i< $number; $i++){
		$str .= '0';
	}
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
	<?php
		echo "<h1>".$str;
	?>
	<form action="<?php $_SERVER['PHP_SELF']?>">
		<input type="number" name="number">
	</form>
</body>
</html>

<?php
//Дана форма с инпутом. В инпут вводится число. По отправки формы выведите в абзац строку, состоящую из нулей, количество которых равно числу. Например, при вводе числа 5 у нас должна получится строка '00000'.