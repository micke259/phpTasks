<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$data = [1,2,3,4,5];
	foreach ($data as $value){
		echo "<p>$value</p>";
	}
	?>
</body>
</html>

<?php
//Дана следующая структура данных:
// <?php
// 	$data = [1, 2, 3, 4, 5];
// 
//Сформируйте с помощью этих данных следующую верстку:
// <p>
// 	1
// </p>
// <p>
// 	2
// </p>
// <p>
// 	3
// </p>
// <p>
// 	4
// </p>
// <p>
// 	5
// </p>