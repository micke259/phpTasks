<?php
// Сделайте функцию, которая параметром будет принимать массив и возвращать случайный элемент этого массива.

function getRandomItemOfArray(array $array):mixed {
	return $array[rand(0, count($array) -1)];
}

echo getRandomItemOfArray([1,2,'asd']);