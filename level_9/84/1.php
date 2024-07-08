<?php
//Дана папка, содержащая картинки. По заходу на страницу выведите на экран случайную картинку из этой папки.

$pathToImg = glob("../../texts/level_7/64/2/*.png");

$randomPicture = $pathToImg[array_rand($pathToImg)];

echo "<img src=". $randomPicture .">";