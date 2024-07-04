<?php
 if(isset($_POST["textarea"])){
	$text = preg_replace("/[!?]/"," ",$_POST["textarea"]);

	$arr = explode(" ",$text);
	natcasesort($arr);
	echo implode(" ",$arr);
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
	<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
		<textarea name="textarea">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum deserunt, et illo excepturi magni obcaecati enim, nulla consectetur praesentium sequi fugit fugiat blanditiis! Architecto iste quidem obcaecati vitae, molestias reiciendis.</textarea>
		<button submit> sub</button>
	</form>
</body>
</html>

<?php
//Дана форма с текстареа. В текстареа вводится текст. После отправки формы выведите слова этого текста в алфавитном порядке и без дублей.