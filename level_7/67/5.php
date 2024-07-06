<?php
//Дан массив:
$affairs = [
		[
			'date' =>  '2019-12-29',
			'event' => 'name1',
		],
		[
			'date' =>  '2019-12-31',
			'event' => 'name2',
		],
		[
			'date' =>  '2019-12-29',
			'event' => 'name3',
		],
		[
			'date' =>  '2019-12-30',
			'event' => 'name4',
		],
		[
			'date' =>  '2019-12-29',
			'event' => 'name5',
		],
		[
			'date' =>  '2019-12-31',
			'event' => 'name6',
		],
		[
			'date' =>  '2019-12-29',
			'event' => 'name7',
		],
		[
			'date' =>  '2019-12-30',
			'event' => 'name8',
		],
		[
			'date' =>  '2019-12-30',
			'event' => 'name9',
		],
	];
//Получите из этого массива уникальные даты, то есть вот так: ['2019-12-29', '2019-12-30', '2019-12-31']

$dates = [];

foreach ($affairs as $key=> $value) {
	$dates[] = $value['date'];
}

print_r(array_unique($dates));