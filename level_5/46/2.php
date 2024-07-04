


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_POST['textarea'])){
			$textareaLength = count(explode(" ",$_POST['textarea']));
			echo"<h1>$textareaLength</h1>";
		}
	?>
	<form action="2.php" method="post">
		<textarea name="textarea" id="1">
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, harum.
		</textarea>
		<button type="submit">asd</button>
	</form>
</body>
</html>
<?php
//Дана форма с текстареа. В него вводится текст со словами. После отправки формы выведите в абзац количество слов во этом тексте.
