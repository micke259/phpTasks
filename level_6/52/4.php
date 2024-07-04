<?php
	$arr =[
	[1, 2, 3],
	[4, 5, 6],
	[7, 8, 9],
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
	<table>
		<?php
			foreach ($arr as $k=>$v) {
				echo "<tr>";
				foreach($arr[$k] as $value){
					echo "<td>$value</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>


<?php
// //[
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// ]
//По заходу на страницу создайте таблицу, заполненную данными из этого массива.