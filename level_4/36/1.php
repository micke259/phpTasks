<?php
// Сделайте функцию, которая параметром будет принимать дату в формате год-месяц-день, и определять, существует ли такая дата или нет.

function validateDate (string $date):bool{
	$chunks = explode("-", $date);

	$year = (int)$chunks[0];
	$month = (int)$chunks[1];
	$day = (int)$chunks[2];
	
	return checkdate($month, $day, $year);
}

echo validateDate("2024-12-12") ? "Такая дата существует": "Такой даты нет";