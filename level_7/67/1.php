<?php
//Дана папка с файлами и подпапками. Получите массив имен подпапок из этой папки.

$directory = '../../texts/level_7/64/';

$subfolders = array_filter(scandir($directory), fn($item)=>is_dir($directory . '/' . $item) && !in_array($item, ['.', '..']));
echo "<pre>";
print_r($subfolders);