<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$data = [1,2,3,4,5];
		$values = implode(",", $data);
	?>
	<input value="<?=$values?>">
	
</body>
</html>


<?php
//Дан массив с числами. По заходу на страницу запишите в инпут все числа из массива, разделив их запятыми.