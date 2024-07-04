<?php
	$arr = [
		['name' => 'prod1', 'price' => 100, 'amount' => 1],
		['name' => 'prod2', 'price' => 200, 'amount' => 2],
		['name' => 'prod3', 'price' => 300, 'amount' => 3],
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
		<thead>
			<tr>
				<th>продукт</th>
				<td>цена</td>
				<td>количество</td>
				<td>сумма</td>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach( $arr as $v ) {
					echo "<tr>";
					echo "<td>".$v['name']."</td>";
					echo "<td>".$v['price']."</td>";
					echo "<td>".$v['amount']."</td>";
					echo "<td>".$v['price']*$v['amount']."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>
<?php
	//Дан следующий массив:
	// $arr = [
	// 	['name' => 'prod1', 'price' => 100, 'amount' => 1],
	// 	['name' => 'prod2', 'price' => 200, 'amount' => 2],
	// 	['name' => 'prod3', 'price' => 300, 'amount' => 3],
	// ];
// //Сформируйте с помощью этого массива следующий код:
// <table>
// 	<thead>
// 		<tr>
// 			<th>продукт</th>
// 			<td>цена</td>
// 			<td>количество</td>
// 			<td>сумма</td>
// 		</tr>
// 	</thead>
// 	<tbody>
// 		<tr>
// 			<td>prod1</td>
// 			<td>100</td>
// 			<td>1</td>
// 			<td>100</td>
// 		</tr>
// 		<tr>
// 			<td>prod2</td>
// 			<td>200</td>
// 			<td>2</td>
// 			<td>400</td>
// 		</tr>
// 		<tr>
// 			<td>prod3</td>
// 			<td>300</td>
// 			<td>3</td>
// 			<td>900</td>
// 		</tr>
// 	</tbody>
// </table>
// <br>
// итого: <span>1400</span>