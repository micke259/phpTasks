<?php
	$arr = [
		'хуй',
		'пизда',
		'сковорода',
	];
	if(isset($_GET['page'])){
		$page_num = (int)$_GET['page'];
		if ($page_num >= 0 && $page_num < count($arr)) {	
			$text = $arr[$page_num];
		} else {

			$text = "hypetextmarkuplanguage";
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
	<p><?php echo $text; ?></p>
</body>
</html>
<?php
//Дан массив. При заходе на страницу GET параметром передается число. Выведите в абзац элемент массива, номер которого передан GET параметром.