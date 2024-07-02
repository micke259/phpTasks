<?php
// Сделайте функцию, которая параметром будет принимать секунды, а возвращать количество дней, часов, минут и секунд, соответствующих этим секундам, в виде следующего массива:

// [
// 	'd' => 12,
// 	'h' => 10,
// 	'm' => 59,
// 	's' => 59,
// ]

function secsToWeirdDay(int $secs): array{
	$days=floor($secs/(24*60*60));
	$secs%=(24*60*60);
	$hours=floor($secs/(60*60));
	$secs%=floor((60*60));
	$minutes=$secs/(60);
	$secs%=60;

	return [
		'd'=>$days,
		'h'=>$hours,
		'm'=>$minutes,
		's'=>$secs
	];
}
echo '<pre>';
print_r(secsToWeirdDay(600000));