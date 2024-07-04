<?php
	$rows = 4;
	$cols = 3;
	//По заходу на страницу сгенерируйте HTML таблицу с заданным количеством рядов и колонок так, чтобы в ячейках стояли номера их рядов и колонок.
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
			for($i=0;$i < $rows;$i++){
				echo "<tr>";
				for( $j= 0;$j < $cols;$j++){
					echo "<td>Cell $i-$j</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>