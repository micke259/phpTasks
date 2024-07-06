<?php

//Дана папка с файлами и подпапками. Получите имена всех файлов из папок и подпапок.

function getAllFiles($directory) {
    $files = [];

    $items = scandir($directory);
    foreach ($items as $item) {
        if ($item != '.' && $item != '..') {
            $path = $directory . '/' . $item;
            if (is_dir($path)) {
                $files = array_merge($files, getAllFiles($path));
            } else {
                $files[] = $path;
            }
        }
    }

    return $files;
}

$directory = '../../texts/level_7/64/';

$allFiles = getAllFiles($directory);
echo "<pre>";
print_r($allFiles);


