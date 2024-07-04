<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="2.php" method="post">
		<?php
			if(isset($_POST['textarea'])){
				$text = $_POST['textarea'];
				
			}
		?>
		<textarea name="textarea" id="1">
			<?php echo $text?>
		</textarea>
		<button submit>123</button>
	</form>
</body>
</html>

<?php
//Дана форма с текстареа. Сделайте так, чтобы после отправки формы в текстареа оставался введенный текст.