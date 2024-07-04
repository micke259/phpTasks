<?php
 if (isset($_GET["numbers"])) {
        $numbers = $_GET['numbers'];
        $sum = 0;
        foreach ($numbers as $number) {
            if (is_numeric($number)) {
                $sum += $number;
            }
        }

        echo "<p>Сумма введенных чисел: $sum</p>";
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
	<form action="2.php" method="GET">
        <input type="number" name="numbers[]" placeholder="Введите число">
        <input type="number" name="numbers[]" placeholder="Введите число">
        <input type="number" name="numbers[]" placeholder="Введите число">
        <button type="submit">Посчитать сумму</button>
    </form>
</body>
</html>

<?php
//Дана форма с произвольным количеством инпутов. В инпуты вводятся числа. После отправки формы найдите сумму введенных чисел и выведите ее на экран.