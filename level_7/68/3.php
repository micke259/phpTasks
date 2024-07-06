<?php
//Напишите программу, которая сформирует следующий массив:
$result = [];


for ($i = 1; $i <= 5; $i++) {
    $result[] = mb_substr('12345', 0, $i);
}


for ($i = 4; $i >= 1; $i--) {
    $result[] = mb_substr('12345', 0, $i);
}
echo "<pre>";
print_r($result);


