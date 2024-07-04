<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

	<?php
	$data = [1,2,3,4,5];
	?>
	<?php foreach($data as $value): ?>
		<input value="<?=$value?>">
		<br>
	<?php endforeach;?>
</html>
<?php
//Дан следующая структура данных:
// <?php
// 	$data = [1, 2, 3, 4, 5];
// 
// Сформируйте с помощью этих данных следующую верстку:
// <input value="1">
// <input value="2">
// <input value="3">
// <input value="4">
// <input value="5">