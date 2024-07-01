<?php

function getDaysUntilEndMonth() {
	$currentDate = new DateTime();
	$value = new DateTime();
	$endOfMonth = $value->modify("last day of this month");
	$interval =$currentDate->diff($endOfMonth);
	return $interval->days;
} 
echo 'До конца этого месяца осталось '.getDaysUntilEndMonth().' дней';