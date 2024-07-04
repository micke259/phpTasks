<?php
	if(isset($_POST['phone'])){
		$phone = $_POST['phone'];
		$color = "black";
	if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
		$color = "green";	
	}else{
		$color = "red";
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
	<form action="6.php" method="post"><input name="phone" type="text" style="border-color:<?php echo $color?> ;">
	<button submit>validate</button>
</form>
</body>
</html>
<?php
//Дана форма с инпутом. В инпут вводится номер телефона. После отправки формы проверьте формат введенного номера. Если он корректный, то покрасьте границу инпута в зеленый цвет, а если некорректный - то в красный.
