<?php
	if(isset($_POST['textarea'])){
		$text = $_POST['textarea'];
		file_put_contents('../../texts/level_7/61/2.txt', $text);
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
	<form action="2.php" method="post">
		<textarea name="textarea"></textarea>
		<button submit>write</button>
	</form>
</body>
</html>

<?php
//Дана форма с текстареа и кнопкой. Юзер вводит текст в форму. После отправки формы запишите введенный текст в какой-нибудь файл.
