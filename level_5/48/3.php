
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$data = [1,2,3,4,5,6,7];
		$h1 = array_rand(array_flip($data));
		echo "<h1>$h1</h1>"
	?>
</body>
</html>
<?php
//Дан массив. Сделайте так, чтобы при обновлении страницы в абзац выводился случайный элемент массива.