<?php

//№2 Сделайте функцию, которая будет возвращать сколько дней прошло или осталось до заданной даты в году, в зависимости от того, была уже эта дата или нет.
 
function dateDifference($date) {
    $currentDate = new DateTime();
    $currentYear = $currentDate->format('Y');
    $targetDate = new DateTime($currentYear . '-' . $date);

    if ($currentDate > $targetDate) {
        $interval = $currentDate->diff($targetDate);
        return $interval->days . ' дней прошло с ' . $date;
    } else {
        $interval = $targetDate->diff($currentDate);
        return $interval->days . ' дней осталось до ' . $date;
    }
}
echo "<pre>";
$date1 = '07-01';
echo dateDifference($date1);
echo "<pre>";
$date2 = '12-25';
echo dateDifference($date2);
echo "<pre>";
$date3 = '01-01';
echo dateDifference($date3);

