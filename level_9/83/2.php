<?php
//Пусть у нас есть дата 22.02.2017. В этой дате 4 двойки. Найдите все даты с 4-мя двойками в текущем столетии.
function countTwos($date) {
    $count = 0;
	$date_str = preg_replace("/[.]/","", $date);
    $count = mb_substr_count($date_str, '2'); 
    return $count;
}


function hasFourTwos($date) {
    return countTwos($date) === 4;
}

$datesWithFourTwos = [];

for ($year = 2001; $year <= 2100; $year++) {
    for ($month = 1; $month <= 12; $month++) {
        for ($day = 1; $day <= 31; $day++) {
            if (checkdate($month, $day, $year)) {
                $date = date("d.m.Y", mktime(0, 0, 0, $month, $day, $year));
                if (hasFourTwos($date)) {
                    $dates_with_four_twos[] = $date;
                }
            }
        }
    }
}

// Вывод результатов
echo "Даты с 4 двойками в текущем столетии (с 2001 по 2100 год):\n";
foreach ($dates_with_four_twos as $date) {
    echo "$date\n";
}
