<?php
$resultMessage = "";

if (isset($_POST["numbers"])) {
    $numbers = $_POST['numbers'];
        sort($numbers);
        if ($numbers[0]**2 + $numbers[1]**2 === $numbers[2]**2) {
            $resultMessage = "Числа являются тройкой Пифагора.";
        } else {
            $resultMessage = "Числа не являются тройкой Пифагора.";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка тройки Пифагора</title>
</head>
<body>
    <form action="3.php" method="post">
        <input type="number" name="numbers[]" placeholder="Введите число">
        <input type="number" name="numbers[]" placeholder="Введите число">
        <input type="number" name="numbers[]" placeholder="Введите число">
        <button type="submit">Проверить</button>
    </form>

    <p><?php echo $resultMessage; ?></p>
</body>
</html>

<?php
//Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа являются тройкой Пифагора: квадрат самого большого числа должен быть равен сумме квадратов двух остальных.
?>
