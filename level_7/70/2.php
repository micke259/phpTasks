<?php
//Напишите функцию, которая параметром будет принимать путь к папке, а возвращать размер этой папки.
function getFolderSize($path) {
    $totalSize = 0;
    $files = scandir($path);

    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $filePath = $path . '/' . $file;

            if (is_file($filePath)) {
                $totalSize += filesize($filePath);
            }
            elseif (is_dir($filePath)) {
                $totalSize += getFolderSize($filePath);
            }
        }
    }

    return $totalSize;
}

$folderPath = '../../texts/level_7/64/2';
$folderSize = getFolderSize($folderPath);

echo "Размер папки $folderPath составляет: " . $folderSize . " байт.";

