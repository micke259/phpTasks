<?php
	if(isset($_POST['date'])){
		$inputDate = new DateTime($_POST['date']);
		$currentDate = new DateTime();

		if($inputDate->format('Y')===$currentDate->format('Y')){
			echo 'Эта дата была в этом году';
		}else {
			echo '[object Object]';
		}
	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="1.php"method="post">
		<input name="date" type="text">
	</form>
</body>
</html>

<?php

//Дана форма с инпутом. В инпут вводится дата. После отправки формы определите, была уже дата в текущем году. Результат выведите в абзац.

