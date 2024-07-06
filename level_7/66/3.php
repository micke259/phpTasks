<?php
$text=file_get_contents("../../texts/level_7/61/1.txt");
$arr = explode(" ", $text);
shuffle($arr);
file_put_contents("../../texts/level_7/66/shuffled.txt",implode(" ",$arr));