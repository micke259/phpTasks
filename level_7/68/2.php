<?php
//Дан текстовый файл. Получите все уникальные слова из этого файла. Результат запишите в новый файл, так, чтобы в каждом ряду стояло по 10 слов, разделенных пробелами.

$text = file_get_contents("../../texts/level_7/61/1.txt");
$filtered = preg_replace("/[.?,!]/","", $text);

$array = array_unique(explode(" ", $filtered));

$result = [];
$currentLine = [];

foreach ($array as $word) {
    $currentLine[] = $word;

    if (count($currentLine) === 10) {
        $result[] = implode(" ", $currentLine);
        $currentLine = [];
    }
}


if (!empty($currentLine)) {
    $result[] = implode(" ", $currentLine);
}
echo "<pre>";
file_put_contents("../../texts/level_7/68/2.txt", implode("\n", $result));

