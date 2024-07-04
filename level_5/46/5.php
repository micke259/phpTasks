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
			$date =new DateTime();
			$currYear = $date->format("Y");
			for($i=$currYear-100; $i<=$currYear+100;$i++){
				echo "<li>$i</li>";
			}
		?>
	</ul>
</body>
</html>

<?php
//По заходу на страницу выведите в виде ul список всех годов за сто лет назад и вперед.