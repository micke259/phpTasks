<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php
			$data= [1,2,3,4,5];
		?>
		<?php foreach ($data as $value):?> 
			<li><?=$value?></li>
		<?php endforeach;?>
		
	</ul>
</body>
</html>


<?php
//Дан следующая структура данных:
// <?php
// 	$data = [1, 2, 3, 4, 5];
// 
// <ul>
// 	<li>1</li>
// 	<li>2</li>
// 	<li>3</li>
// 	<li>4</li>
// 	<li>5</li>
// </ul>