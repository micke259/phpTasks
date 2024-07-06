<?php

function deleteFolder(string $folderPath) {
    if (!is_dir($folderPath)) {
        return false;
    }

    $files = array_diff(scandir($folderPath), ['.', '..']);

    foreach ($files as $file) {
        $filePath = $folderPath . '/' . $file;
        if (is_file($filePath)) {
            unlink($filePath);
        }
        elseif (is_dir($filePath)) {
            deleteFolder($filePath);
        }
    }

    rmdir($folderPath);

    return true;
}

$folderPath = '../../texts/level_7/70/te';

deleteFolder($folderPath);
