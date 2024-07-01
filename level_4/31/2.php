<?php

//№2 Сделайте функцию, которая параметром будет получать дату, а возвращать день недели словом, соответствующий этой дате.
function DateToWeekDay($date) {
	$weekdays = [
		'Воскресенье',
        'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота' 
	];

	$dateTime = new DateTime($date);
	$weekDayNumber = $dateTime->format('w');

	return $weekdays[$weekDayNumber];
}

echo DateToWeekDay(date('Y-m-d'));

