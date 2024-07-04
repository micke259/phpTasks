<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$data = [];
		for($i=0; $i<=4; $i++){
			$data[] = rand(0,1000);
			echo "<input value=".$data[$i].">";
		}
	?>
</body>
</html>

<?php
//При обновлении страницы сгенерируйте пять инпутов со случайными числами.