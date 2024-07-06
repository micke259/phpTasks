<?php
//Дана папка с файлами. Получите массив размеров всех файлов из этой папки.

$paths = glob("../../texts/level_7/64/2/*.png");
foreach ($paths as $path) {
	echo "<pre>";
	echo filesize($path);
}