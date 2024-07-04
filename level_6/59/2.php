<?php
$text = "А габба будет?А габба будет?А габба будет?А габба будет?";

$highlightedText = $text;

if (isset($_GET['searchWords'])) {
    $searchWords = trim($_GET['searchWords']);
    $wordsArray = explode(' ', $searchWords);

   
    foreach ($wordsArray as $word) {
        $word = trim($word);
        if (!empty($word)) {
            $highlightedText = str_replace($word, '<span style="color: red; font-weight: bold;">' . $word . '</span>', $highlightedText);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highlight Words</title>
</head>
<body>
    <div>
        <?php echo $highlightedText; ?>
    </div>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="searchWords">Введите слова через пробел:</label>
        <input type="text" id="searchWords" name="searchWords" value="<?php echo $_GET['searchWords']; ?>">
        <button submit>sub</button>
    </form>
</body>
</html>
<?php
//Дан див с текстом. Дана форма с инпутом. В инпут вводятся слова через пробел. После отправки формы найдите в диве все слова, введенные в инпут и выделите их красным цветом.