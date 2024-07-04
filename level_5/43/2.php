
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="2.php" method="get">
		<button type="submit">Найти сумму чисел от одного до ста</button>
	</form>
	<?php
    	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		
    	    $sum = array_sum(range(1, 100));
    	    echo "Сумма чисел от 1 до 100: $sum";
    	}
    ?>
</body>
</html>

<?php
//Дана форма с кнопкой. После отправки формы найдите сумму чисел от 1 до 100 и выведите результат на экран.