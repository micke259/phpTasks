<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сохранение выбора чекбокса</title>
</head>
<body>
    <form action="2.php" method="post">
        <label>
            <input type="checkbox" name="pidor" <?php if (isset($_POST['pidor'])) echo 'checked'; ?>>
            Я согласен с условиями
        </label>
        <br>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
<?php 
//Дана форма с чекбоксом. Сделайте так, чтобы после отправки формы чекбокс сохранял выбор пользователя.