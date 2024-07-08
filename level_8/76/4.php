<?php
// Дан список событий за определенные даты, хранящийся в следующей структуре:

// 	$events = [
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name1'
// 		],
// 		[
// 			'date' =>  '2019-12-31'
// 			'event' => 'name2'
// 		],
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name3'
// 		],
// 		[
// 			'date' =>  '2019-12-30'
// 			'event' => 'name4'
// 		],
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name5'
// 		],
// 		[
// 			'date' =>  '2019-12-31'
// 			'event' => 'name6'
// 		],
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name7'
// 		],
// 		[
// 			'date' =>  '2019-12-30'
// 			'event' => 'name8'
// 		],
// 		[
// 			'date' =>  '2019-12-30'
// 			'event' => 'name9'
// 		],
// 	]
// Напишите код, которой переделает структуру данных вот в такую:

// [
// 	'2019-12-29': ['name1', 'name3', 'name5', 'name7'],
// 	'2019-12-30': ['name4', 'name8', 'name9'],
// 	'2019-12-31': ['name2', 'name6'],
// ]

$events = [
	[
		'date' =>  '2019-12-29',
		'event' => 'name1'
	],
	[
		'date' =>  '2019-12-31',
		'event' => 'name2'
	],
	[
		'date' =>  '2019-12-29',
		'event' => 'name3'
	],
	[
		'date' =>  '2019-12-30',
		'event' => 'name4'
	],
	[
		'date' =>  '2019-12-29',
		'event' => 'name5'
	],
	[
		'date' =>  '2019-12-31',
		'event' => 'name6'
	],
	[
		'date' =>  '2019-12-29',
		'event' => 'name7'
	],
	[
		'date' =>  '2019-12-30',
		'event' => 'name8'
	],
	[
		'date' =>  '2019-12-30',
		'event' => 'name9'
	],
];

$result = [];

foreach ($events as $event) {
	$date = $event['date'];
	$name = $event['event'];
	if(!isset($result[$date])){
		$result[$date] = [];
	}
	if (!in_array($name, $result[$date])) {
        $result[$date][] = $name;
    }
}
echo "<pre>";
print_r($result);