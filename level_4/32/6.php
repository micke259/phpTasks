<?php

// №6 Сделайте функцию, которая вернет предыдущий, текущий и следующий дни недели словом в виде следующего массива:
function getWeakDays(): array {
	$weekdays = [
		'вс',
        'пн',
        'вт',
        'ср',
        'чт',
        'пт',
        'сб' 
	];

	$currentDay = (int)date('w');
	$prevDay = ($currentDay - 1 + 7) % 7;
	$nextDay= ($currentDay  + 1) % 7;
	return [
        'prev' => $weekdays[$prevDay],
        'curr' => $weekdays[$currentDay],
        'next' => $weekdays[$nextDay]
    ];
}

echo '<pre>';
print_r(getWeakDays());