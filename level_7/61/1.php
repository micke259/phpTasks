<?php
//Дан текстовый файл. Получите количество символов в нем.
$path = 'texts/level_7/61/1.txt';
$phpPath = 'level_7/61/1.php';

$file = file_get_contents('../../texts/level_7/61/1.txt');
echo mb_strlen($file);