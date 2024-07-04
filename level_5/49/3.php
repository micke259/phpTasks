<?php 
	if(isset($_POST['inputDate'])){
		$value = date('d.m.Y',strtotime($_POST['inputDate']));
	}; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Преобразование формата даты</title>
</head>
<body>
    <form action="3.php" method="post">
        <label for="inputDate">Введите дату в формате 2025-12-31:</label>
        <input type="text" name="inputDate" id="inputDate" value="<?php echo $value?>">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
<?php
//Дана форма с инпутом. В инпут вводится дата в формате 2025-12-31. После отправки формы сделайте так, чтобы в инпуте стала дата в формате 31.12.2025.