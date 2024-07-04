<?php
	$arr = [
		'text1',
		'text2',
		'text3',
	];

	$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.active {
			font-weight: 700;
			color: red;
		}
	</style>
</head>
<body>
	<ul>
		<?php
		foreach ($arr as $k => $v) {
			$index = $k + 1;
			$active_class = ($current_page == $index) ? 'class="active"' : '';
			echo "<li>";
			echo "<a href='index.php?page={$index}' {$active_class}>".$v."</a>";
			echo "</li>";
		}
		?>
	</ul>
</body>
</html>
<?php
//Модифицируйте предыдущую задачу так, чтобы ссылка, ведущая на текущую страницу выделялась заданным классом:
// <ul>
// 	<li><a href="index.php?page=1">text1</a></li>
// 	<li><a href="index.php?page=2" class="active">text2</a></li>
// 	<li><a href="index.php?page=3">text3</a></li>
// </ul>