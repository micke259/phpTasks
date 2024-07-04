<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_POST["date"])){
			$date = $_POST["date"];
			echo date("l", strtotime($date));
		}
	?>
	<form action="4.php" method="post">
		<input name="date" type="text">
	</form>
</body>
</html>

<?php
//Дана форма с инпутом. В инпут вводится дата в формате 2025-12-31. После отправки формы выведите в абзац день недели, соответствующий этой дате.