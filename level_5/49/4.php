<?php
	if(isset($_POST["textarea"])){
		$arr= explode(". ",$_POST["textarea"]);
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
	<form action="4.php" method="post">
		<textarea name="textarea" id="">хуй. пизда. сковорода</textarea>
		<button sumbit>sumbit</button>
	</form>
	<ul>
		<?php
			foreach($arr as $v){
				echo "<li>$v</li>";
			}
		?>
	</ul>
</body>
</html>
<?php
//Дана форма с текстареа. В него вводится текст со знаками препинания. После отправки формы запишите каждое предложение из текста в свой тег li.