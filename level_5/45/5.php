<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="5.php" method="post">
		<label for="checkbox_1">Тебе есть 18 лет?</label>
		<input name="checkbox_1" type="checkbox" value="yes">
		<button type="submit">submit</button>
	</form>
	<?php
 	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 	      if (isset($_POST['checkbox_1']) && $_POST['checkbox_1'] === 'yes') {
 	          echo '<div class="adult"><h2>for adult</h2><p>text text text</p></div>';
 	      } else {
 	          echo '<div class="child"><h2>for child</h2><p>text text text</p></div>';
 	      }
 	  }
	?>
</body>
</html>

<?php
//С помощью чекбокса спросите у пользователя, есть ли ему уже 18 лет. Если есть, то выведите следующий текст:
// <div class="adult">
// 	<h2>for adult</h2>
// 	<p>
// 		text text text
// 	</p>
// </div>
//А если нет, то выведите следующий текст:
// <div class="child">
// 	<h2>for child</h2>
// 	<p>
// 		text text text
// 	</p>
// </div>