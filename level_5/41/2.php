<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$currentDate = new DateTime();
	$nextYear = $currentDate->format("Y")+1;
	$nextYearDate = new DateTime("January 1 $nextYear");

	$interval = $currentDate->diff($nextYearDate);

	echo "<h1>До нового года осталось: {$interval->days} дней</h1>"
	?>
</body>
</html>

