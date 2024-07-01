<?php

// №3 Сделайте функцию, которая параметром будет принимать массив и удалять из него одинаковые, рядом стоящие элементы.

function cum(&$array) {
    
    for($i=1;$i < count($array);$i++) {
        if ($array[$i] === $array[$i - 1]) {
            array_splice($array, $i, 1);   
        } 
        
    }
}

echo"<pre>";
$array = [1, 2, 2, 3, 3, 3, 4, 4, 5, 5,2,3,4,5,5,4,4,5,6,7,7,7,6];
cum($array);
print_r($array);
