<?php
	$arr = [
		['name' => 'user1', 'age' => 30, 'salary' => 500],
		['name' => 'user2', 'age' => 31, 'salary' => 600],
		['name' => 'user3', 'age' => 32, 'salary' => 700],
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
				echo "<td>$k</td>";
				echo "<td>".$v['name']."</td>";
				echo "<td>".$v['age']."</td>";
				echo "<td>".$v['salary']."</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>

<?php
//Дан следующий массив:
// <?php
// 	$arr = [
// 		['name' => 'user1', 'age' => 30, 'salary' => 500],
// 		['name' => 'user2', 'age' => 31, 'salary' => 600],
// 		['name' => 'user3', 'age' => 32, 'salary' => 700],
// 	];
//
//Сформируйте с помощью этого массива следующий код:
// <table>
// 	<tbody>
// 		<tr>
// 			<td>1</td>
// 			<td>user1</td>
// 			<td>30</td>
// 			<td>500</td>
// 		</tr>
// 		<tr>
// 			<td>2</td>
// 			<td>user2</td>
// 			<td>31</td>
// 			<td>600</td>
// 		</tr>
// 		<tr>
// 			<td>3</td>
// 			<td>user3</td>
// 			<td>32</td>
// 			<td>700</td>
// 		</tr>
// 	</tbody>
// </table>