<?php

//Дана папка с файлами. Напишите программу, которая сделает пустыми все текстовые файлы из этой папки.

$filePaths = glob("../../texts/level_7/64/5/*.txt");
foreach ($filePaths as $filePath) {
	file_put_contents($filePath,"");
}