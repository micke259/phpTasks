<?php
// Проверяем, была ли отправлена форма и есть ли значение number
$borderColor = '';
$number = '';

if (isset($_GET['number'])) {
    $number = $_GET['number'];
    if (is_numeric($number)) {
        $borderColor = ($number % 2 === 0) ? 'green' : 'red';
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
    <form action="1.php" method="get">
        <input type="text" name="number" style="border-color: <?= $borderColor; ?>">
        <button type="submit">Проверить</button>
    </form>
</body>
</html>
