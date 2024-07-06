<?php

//В папке лежат текстовые файлы. Получите первые N строк текста из каждого файла и запишите результат в новый файл, разделив полученные тексты пустыми строками.

$N=20;

$text1 = mb_substr(file_get_contents("../../texts/level_7/64/4/1.txt"), 0,$N);
$text2 = mb_substr(file_get_contents("../../texts/level_7/64/4/2.txt"), 0,$N);

$str = $text1."\n".$text2;

file_put_contents("../../texts/level_7/64/4/result.txt", $str);