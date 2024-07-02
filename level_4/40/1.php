<?php
//Сделайте функцию, которая параметром будет принимать букву и проверять, это буква кириллицы или латиницы.

function idiNaxuy(string $letter): string{
	$check = mb_strtolower($letter);

	if($check>='а' && $check<= 'я'){
		return "Кириллица";
	}
	if($check>='a' && $check<= 'z'){
		return "Латиница";
	}
	
	throw new Exception("Иди нахуй");
}

echo idiNaxuy("");