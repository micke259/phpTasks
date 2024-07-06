<?php
//Дана папка с файлами и подпапками. Получите пути ко всем файлам из папки и подпапок. Результат запишите в новый файл, каждый путь с новой строки.
function getAllFilePaths($dir) {
    $filePaths = [];

    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $filePath = $dir . '/' . $file;

            if (is_file($filePath)) {
                $filePaths[] = $filePath;
            }
            elseif (is_dir($filePath)) {
                $filePaths = array_merge($filePaths, getAllFilePaths($filePath));
            }
        }
    }

    return $filePaths;
}

$folderPath = '../../texts/level_7/64';


$filePaths = getAllFilePaths($folderPath);
echo "<pre>";
print_r($filePaths);
file_put_contents("../../texts/level_7/70/result.txt",implode("\n", $filePaths));

