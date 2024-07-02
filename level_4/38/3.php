<?php
//Сделайте функцию, которая параметром будет принимать массив и возвращать случайный элемент этого массива так, чтобы одинаковые элементы не возвращались два раза подряд.

function getRandomUniqueItem($array) {
    static $prevElement = null;
    $randomKey = array_rand($array);
    $randomItem = $array[$randomKey];

    while ($randomItem === $prevElement) {
        $randomKey = array_rand($array);
        $randomItem = $array[$randomKey];
    }
    
    $prevElement = $randomItem;
    
    return $randomItem;
}

$array = [1, 2, 3, 4, 5];
echo getRandomUniqueItem($array) . " ";
echo getRandomUniqueItem($array) . " ";
echo getRandomUniqueItem($array) . " ";
echo getRandomUniqueItem($array) . " ";
echo getRandomUniqueItem($array) . " ";