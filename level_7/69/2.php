<?php
//Дан текстовый файл. Проверьте, что в этом файле первое слово каждого предложения начинается с большой буквы.
$text = file_get_contents("../../texts/level_7/61/1.txt");
$filtered = preg_replace("/[!?]/", ".", $text); 
$sentences = explode(".", $filtered); 

$count = 0;
foreach ($sentences as $sentence) {
    $sentence = trim($sentence);
    if (!empty($sentence)) { 
        $firstWord = mb_substr($sentence, 0, mb_strpos($sentence, ' ')); 
        if (mb_substr($firstWord, 0, 1) === mb_strtoupper(mb_substr($firstWord, 0, 1))) {
            $count++;
        }
    }
}

echo "Количество предложений, в которых первое слово начинается с большой буквы: " . $count;

