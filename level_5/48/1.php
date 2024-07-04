<?php
$select = '';

if (isset($_POST['select'])) {
    $select = $_POST['select'];
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
        <select name="select" id="1">
            <option value="хуй" <?php echo $select === 'хуй' ? 'selected' : ''; ?>>хуй</option>
            <option value="пизда" <?php echo $select === 'пизда' ? 'selected' : ''; ?>>пизда</option>
            <option value="сковорода" <?php echo $select === 'сковорода' ? 'selected' : ''; ?>>сковорода</option>
        </select>
        <button type="submit">submit</button>
    </form>
</body>
</html>
<?php
//Дана форма с селектом. Сделайте так, чтобы после отправки формы селект сохранял выбор пользователя.