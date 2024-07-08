<?php

//Дан массив со словами. Получите из этого массива случайное слово, начинающееся на заданную букву.
function wtf(array $words, string $letter):string {
    $filteredWords = array_filter($words, fn($word) => mb_strtolower(mb_substr($word, 0, 1)) === mb_strtolower($letter));
    
    if (empty($filteredWords)) {
        return null;
    }
    
    $randomKey = array_rand($filteredWords);
    return $filteredWords[$randomKey];
}

$words = ['Apple', 'Banana', 'Cherry', 'Avocado', 'Apricot', 'Blueberry'];
$letter = 'A'; 

$randomWord = wtf($words, $letter);
if ($randomWord !== null) {
    echo "Случайное слово, начинающееся на букву '$letter': $randomWord";
} else {
    echo "В массиве нет слов, начинающихся на букву '$letter'";
}
