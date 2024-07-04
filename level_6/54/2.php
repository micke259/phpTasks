<?php
	$arr=[];
	if(isset($_POST['textarea'])){
		$text = trim($_POST['textarea']);
		$formattedText = preg_replace('/[!?]/','.', $text);
		$arr = explode('.', $formattedText);
		$result=[];
		foreach($arr as $value ){
			$words = explode(' ', trim($value));
			if(!empty($words)){
				$result[]= $words[0];
			}
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

	<form action="2.php" method="post">
		<textarea name="textarea">
			Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt tempora soluta, commodi debitis quia possimus quidem veritatis? Facilis minus nobis labore quas, commodi magni aliquid est eaque enim provident dicta.
		</textarea>
		<button submit >sub</button>
	</form>
	<?php foreach ($result as $value) {
		echo "<p>$value</p>";
	}?>
</body>
</html>

<?php
//Дана форма с текстареа. В текстареа вводится текст. Получите первое слово каждого предложения в тексте и выведите на экран.