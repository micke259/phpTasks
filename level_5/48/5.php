<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="5.php" method="post">
		<input type="text" name="a">
	</form>
	<?php
		if(isset($_POST['a'])){
			echo in_array('13',explode(',',$_POST['a']));
		}
	?>
</body>
</html>

<?php
//Дана форма с инпутом. В инпут через запятую вводятся числа. После отправки формы проверьте, есть ли среди введенных число 13.
