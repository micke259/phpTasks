<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="4.php" method="get">
		<input name="hueta">
	</form>
	<ul>
		<?php
			if(isset($_GET['hueta'])){
				$arr = mb_str_split($_GET['hueta']);
				foreach ($arr as $value) :?>
					<li><?=$value?></li>
				<?php endforeach; 
			}
		?>
	</ul>
</body>
</html>


<?php
//Дана форма с кнопкой и инпутом. В инпут вводится число, например, '12345'. После отправки формы разбейте число на цифры и каждую цифру выведите в своем теге li:
// <ul>
// 	<li>1</li>
// 	<li>2</li>
// 	<li>3</li>
// 	<li>4</li>
// 	<li>5</li>
// </ul>