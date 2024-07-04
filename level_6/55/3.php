<?php
 	$arr = [
		'text1',
		'text2',
		'text3',
	];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php
		foreach ($arr as $k => $v) {
			echo "<li>";
			echo "<a href='index.php?page=".($k+1)."'>".$v."</a>";
			echo "</li>";
		}
		?>
	</ul>
</body>
</html>

<?php
//Дан следующий массив:
// <?php
// 	$arr = [
// 		'text1',
// 		'text2',
// 		'text3',
// 	];
//Сформируйте с его помощью следующий HTML код:
// <ul>
// 	<li><a href="index.php?page=1">text1</a></li>
// 	<li><a href="index.php?page=2">text2</a></li>
// 	<li><a href="index.php?page=3">text3</a></li>
// </ul>