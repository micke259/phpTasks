<?php
$sortedWords = [];
$text = '';

if (isset($_POST['text'])) {
    $text = $_POST['text'];
    $text = trim($text);

    $textLower = mb_strtolower($text);
    $wordsArray = explode(' ', $textLower);

    $uniqueWords = array_unique(array_filter($wordsArray));
    natsort($uniqueWords);

    $sortedWords = $uniqueWords;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сортировка слов в алфавитном порядке</title>
</head>
<body>
    <form action="" method="post">
        <label for="text">Введите текст:</label><br>
        <textarea name="text" rows="5" cols="40"><?php echo htmlspecialchars($text); ?></textarea><br><br>
        <button type="submit">Отправить</button>
    </form>

    <?php if (!empty($sortedWords)) 
       	echo "<h3>Слова в алфавитном порядке:</h3>";
        echo "<ul>";
        foreach ($sortedWords as $word){
            echo"<li>$word</li>";
		}
        echo "</ul>";
    ?>
</body>
</html>
<?php
//Дана форма с текстареа. В текстареа вводится текст. После отправки формы выведите слова этого текста в алфавитном порядке и без дублей.