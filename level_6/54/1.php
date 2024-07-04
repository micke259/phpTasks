<?php
$fridays = [];
if (isset($_POST['date'])) {
    $year = (int)$_POST['date'];
    for ($i = 1; $i <= 12; $i++) { 
        $curr = new DateTime("$year-$i-13");
        if ($curr->format("N") == 5) {
            $fridays[] = $curr->format("Y-m-d");
        }
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
    <form action="1.php" method="post">
        <input name="date">
        <button type="submit">Показать</button>
    </form>
    <ul>
        <?php
        foreach ($fridays as $value) {
            echo "<li>$value</li>";
        }
        ?>
    </ul>
</body>
</html>
<?php
//Дана форма с инпутом. В инпут вводится год. Выведите в список ul даты всех пятниц 13-е в заданном году.
?>
