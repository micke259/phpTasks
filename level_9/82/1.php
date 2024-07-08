<?php
//Два числа делятся друг на друга, в результате получается периодическая дробь. Напишите код, который определит период этой дроби.
function Period($chislitel, $znamenatel) {
    $remainderMap = [];
    $remainder = $chislitel % $znamenatel;
    $position = 0;
    while ($remainder != 0 && !isset($remainderMap[$remainder])) {
        $remainderMap[$remainder] = $position;
        
        $remainder = $remainder * 10 % $znamenatel;
        $position++;
    }
    
   
    if ($remainder == 0) {
        return 0;
    } else {
        return $position - $remainderMap[$remainder];
    }
}

$chislitel = 2;
$znamenatel = 3;
$period = Period($chislitel, $znamenatel);

echo "Период дроби $chislitel / $znamenatel: $period\n";
