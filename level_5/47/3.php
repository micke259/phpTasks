<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $email = '';
    $age = '';

    $emailError = '';
    $ageError = '';
    if (empty($_POST['email'])) {
        $emailError = 'Введите ваш email.';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Некорректный формат email.';
        }
    }

    if (empty($_POST['age'])) {
        $ageError = 'Введите ваш возраст.';
    } else {
        $age = $_POST['age'];
        if (!filter_var($age, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 120]])) {
            $ageError = 'Возраст должен быть числом от 1 до 120.';
        }
    }
    
    ?>

    <form action="3.php" method="post">
        <div>
            <div class="error"><?php echo $emailError; ?></div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        </div>
        <div>
            <div class="error"><?php echo $ageError; ?></div>
            <label for="age">Возраст:</label>
            <input type="text" id="age" name="age" value="<?php echo htmlspecialchars($age); ?>">
        </div>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>


<?php
//Дана форма с текстареа. Сделайте так, чтобы после отправки формы в текстареа оставался введенный текст.

