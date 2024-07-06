<?php
//В файле через запятую написаны числа. Получите максимальное из этих чисел.
$numbers = file_get_contents("../../texts/level_7/62/3.txt");
$max = max(explode(",", $numbers));
echo $max;