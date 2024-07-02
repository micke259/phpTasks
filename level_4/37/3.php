<?php
//Сделайте функцию, которая будет возвращать случайное число. Функция не должна возвращать одно и тоже число два раза подряд.

function getRandomNumber(int $min, int $max){
	static $lastRand = null;
	for($i=0; $i < 1000; $i++){
		$randNumber = rand($min, $max);
		if($randNumber !== $lastRand){
			$lastRand = $randNumber;
			return $randNumber;
		}
	}
	return $lastRand;
}

echo getRandomNumber(0,2);
echo getRandomNumber(0,2);
echo getRandomNumber(0,2);
echo getRandomNumber(0,2);