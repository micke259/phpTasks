<?php

// №2 Сделайте функцию, которая параметром будет принимать дату, а возвращать знак зодиака, соответствующий этой дате.

function getZodiac($date){
	$zodiacs = [
        ['start' => '01-20', 'end' => '02-18', 'sign' => 'Водолей'],
        ['start' => '02-19', 'end' => '03-20', 'sign' => 'Рыбы'],
        ['start' => '03-21', 'end' => '04-19', 'sign' => 'Овен'],
        ['start' => '04-20', 'end' => '05-20', 'sign' => 'Телец'],
        ['start' => '05-21', 'end' => '06-20', 'sign' => 'Близнецы'],
        ['start' => '06-21', 'end' => '07-22', 'sign' => 'Рак'],
        ['start' => '07-23', 'end' => '08-22', 'sign' => 'Лев'],
        ['start' => '08-23', 'end' => '09-22', 'sign' => 'Дева'],
        ['start' => '09-23', 'end' => '10-22', 'sign' => 'Весы'],
        ['start' => '10-23', 'end' => '11-21', 'sign' => 'Скорпион'],
        ['start' => '11-22', 'end' => '12-21', 'sign' => 'Стрелец'],
        ['start' => '12-22', 'end' => '01-19', 'sign' => 'Козерог']
    ];

	$dateTime =new DateTime($date);
	$format = $dateTime->format('m-d');

	foreach ($zodiacs as $zodiac) {
        if (($format >= $zodiac['start'] && $format <= $zodiac['end'])) {
            return $zodiac['sign'];
        }
    }
}

echo getZodiac(date("Y-m-d"));