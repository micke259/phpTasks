<?php
//Дан массив со словами. Выведите слова, начинающиеся на одинаковые буквы в своем отдельном списке ul. Над каждым списком сделайте h2 с названием буквы, для которой сделан список.

$words = ['говно', 'залупа', 'пенис', 'хер', 'гол', 'халупа', 'гол', 'гол', 'гол'];


$grouped_words = [];
foreach ($words as $word) {
	$first_letter = mb_substr($word,0,1,);
    if (!isset($grouped_words[$first_letter])) {
        $grouped_words[$first_letter] = [];
    }
    $grouped_words[$first_letter][] = $word;
}

$html = '';
foreach ($grouped_words as $letter => $words_list) {
    $html .= "<h2>$letter</h2>\n<ul>\n";
    foreach ($words_list as $word) {
        $html .= "<li>$word</li>\n";
    }
    $html .= "</ul>\n";
}

echo $html;

