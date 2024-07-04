<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_POST['input'])){
			$input = $_POST['input'];
		}
	?>
	<form action="1.php" method="post">
		<input type="text" name="input" value="<?php echo $input?>">
	</form>
</body>
</html>
<?php
//Дана форма с инпутом. Сделайте так, чтобы после отправки формы в инпуте оставался введенный текст.