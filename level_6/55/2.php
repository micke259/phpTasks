<?php
	if(isset($_POST['number_1'])&&isset($_POST['number_2'])){
		$number_1 = explode(',',$_POST['number_1']);
		$number_2 = explode(',',$_POST['number_2']);
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
	<?php
		echo "Общие числа: ".implode(",",array_intersect($number_1,$number_2));
	?>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="number_1">
		<input type="text" name="number_2">
		<button>найти общие числа</button>
	</form>
</body>
</html>
<?php 

//Дана форма двумя инпутами. В инпуты через запятую вводятся числа. После отправки формы выведите через запятую в абзац числа, которые есть в обоих инпутах.
