<?php
$words = ["говно", "залупа", "пенис", "хер", "головка", "жопа", "член", "блядун"];

$result = []; 

if(isset($_POST['search_word'])) {
    $searchWord = $_POST['search_word'];

    foreach($words as $word) {
        if(allLetters($word, $searchWord)) {
            $result[] = $word;
        }
    }
}

function allLetters(string $word, string $searchWord): bool {
    $word = mb_strtolower($word);
    $searchWord = mb_strtolower($searchWord);
    $letters = mb_str_split($searchWord);

    foreach($letters as $letter) {
        if(mb_strpos($word, $letter) === false) {
            return false;
        }
    }
    return true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Words</title>
</head>
<body>
    <form action="1.php" method="post">
        <label for="search_word">Введите слово:</label>
        <input type="text" name="search_word">
        <button type="submit">Найти</button>
    </form>

    <ul>
        <?php foreach($result as $word)
            echo "<li>$word</li>"
        ?>
    </ul>
</body>
</html>
<?php
//Дан массив со словами. Дана форма с инпутом. В инпут вводится слово. Получите из массива все слова, которые содержат в себе все буквы введенного слова. Результат выведите в виде списка ul.