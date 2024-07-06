<?php
//Дан текстовый файл. Запишите в конец его текста текущий момент времени с новой строки.
$text = file_get_contents("../../texts/level_7/64/1.txt");
file_put_contents("../../texts/level_7/64/1.txt", $text.date("Y-m-d"));
