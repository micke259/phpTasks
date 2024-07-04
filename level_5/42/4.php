

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="4.php" method="get">
		<input type="text" name="number" placeholder="Введите число">
		<button type="submit">Отправить</button>
	</form>
	
</body>

</html>
<?php if(isset($_GET["number"])): ?>
	<script>
		alert(<?= array_sum(mb_str_split($_GET['number'])) ?>)
	</script>
	<?php endif;?>

<?php
//Дана форма с кнопкой и инпутом. В инпут вводится число. После отправки формы найдите сумму цифр введеного числа.