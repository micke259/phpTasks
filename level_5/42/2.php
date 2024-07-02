<?php
function fucktorial($number){ 
    $factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
    $factorial = $factorial * $i; 
    } 
    return $factorial; 
}
if(isset($_GET["number"])){
	$number = $_GET['number'];
	echo fucktorial($number);
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
	<form action="2.php" method="get">
		<input type="text" name="number" placeholder="Введите число">
		<button>Факториал</button>
	</form>
</body>
</html>