<?php
// Step 1: Read the contents of the file
$text = file_get_contents("../../texts/level_7/61/3/oldfile.txt");

$array = explode(" ", $text);


foreach ($array as $key => $value) {
    $array[$key] = "<span>" . $value . "</span>";
}




file_put_contents("../../texts/level_7/61/3/newfile.txt", implode(" ", $array));

