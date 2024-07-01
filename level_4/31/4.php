<?php

//№4 Сделайте функцию, которая параметром будет принимать число и строку и обрезать эту строку до длины, заданной первым параметром.

function strCut(int $length, string $message){
	return mb_substr($message, 0,$length);
}

echo strCut(3,"asdasdkl;askda;");