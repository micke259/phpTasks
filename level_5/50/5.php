<?php
$count = 0;
$text = '';
$word = '';

if (isset($_POST['text']) && isset($_POST['word'])) {
    $text = $_POST['text'];
    $word = $_POST['word'];
    $text = trim($text);
    $word = trim($word);

    
    $textLower = mb_strtolower($text);
    $wordLower = mb_strtolower($word);
    $wordsArray = explode(' ', $textLower);
    foreach ($wordsArray as $item) {
        if ($item === $wordLower) {
            $count++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчет вхождений слова в тексте</title>
</head>
<body>
    <form action="5.php" method="post">
        <label for="text">Введите текст:</label><br>
        <textarea name="text">
			<?php echo $text; ?>
		</textarea><br><br>
        <label for="word">Введите слово:</label>
		<br>
        <input type="text" name="word" value="<?php echo $word; ?>">
		<br>
		<br>
        <button type="submit">Посчитать</button>
    </form>

    <?php if ($word !== '')
       echo"<p>Слово $word встречается в тексте $count раз.</p>"
    ?>
</body>
</html>
<?php
//Дана форма с текстареа и инпутом. В текстареа вводится текст со словами. В инпут вводится слово. По отправки формы выведите на экран, сколько раз встречается это слово в веденном тексте.