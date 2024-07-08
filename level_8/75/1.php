<?php
//При первом заходе на страницу с помощью инпута спросите у пользователя день его рождения. Когда в следующий раз пользователь зайдет в свой день рождения, поздравьте его.
session_start();

if (isset($_POST['birthday'])) {
    $_SESSION['birthday'] = $_POST['birthday'];
    $birthday_set = true;
} elseif (isset($_SESSION['birthday'])) {
    $birthday_set = true;
}

function isBirthday(string $birthday):bool {
    $today = date('m-d');
    return $today == date('m-d', strtotime($birthday));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Birthday Check</title>
</head>
<body>
    <?php if (isset($birthday_set) && $birthday_set): ?>
        <?php if (isBirthday($_SESSION['birthday'])): ?>
            <h1>С Днем Рождения!</h1>
        <?php else: ?>
            <h1>Сегодня не ваш день рождения.</h1>
        <?php endif; ?>
    <?php else: ?>
        <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
            <label for="birthday">Введите ваш день рождения (YYYY-MM-DD):</label>
            <input type="date" id="birthday" name="birthday">
            <button submit>Сохранить</button>
        </form>
    <?php endif; ?>
</body>
</html>
<?php
session_destroy();
