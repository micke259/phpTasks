<?php
$selectedValue = isset($_POST['group_name']) ? $_POST['group_name'] : '';


$options = [
    'option1' => 'Первый вариант',
    'option2' => 'Второй вариант',
    'option3' => 'Третий вариант'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма с радиокнопками</title>
</head>
<body>
    <form action="4.php" method="post">
        <?php
			foreach ($options as $key => $value) {
				echo "<input 
						type='radio'
						name='group_name'
						value='$key'
						".($selectedValue===$key ? 'checked': '')."
					  >".$value."<br>";
			}
		?>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
<?php
//Дана форма с группой радио. Сделайте так, чтобы после отправки формы радио сохраняли выбор пользователя.