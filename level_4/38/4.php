<?php
//Сделайте функцию, которая будет возвращать массив простых чисел из заданного промежутка.

function getPrimesArray (int $start , int $end): array {
    $result = [];

    for ($i = $start; $i <= $end; $i++) {
        $flag = true;
        if ($i < 2) {
            $flag = false;
        } else {
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j === 0) {
                    $flag = false;
                    break;
                }
            }
        }
        if ($flag) {
            $result[] = $i;
        }
    }

    return $result;
}
echo "<pre>";
print_r(getPrimesArray(1,100));