<?php
//Дана папка с файлами. Получите имена всех картинок из этой папки.
$text = glob("../../texts/level_7/64/2/*.png");
echo "<pre>";
foreach( $text as $file ) {
	$fileArr = explode("/",$file);
	echo "<pre>";
	echo $fileArr[count($fileArr)-1];
}