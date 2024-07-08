<?php
// Дан список событий за определенные месяцы, хранящийся в следующей структуре:
// 	$events = [
// 		[
// 			'date' =>  '2019-12'
// 			'event' => 'name1'
// 		],
// 		[
// 			'date' =>  '2019-12'
// 			'event' => 'name2'
// 		],
// 		[
// 			'date' =>  '2019-11'
// 			'event' => 'name3'
// 		],
// 		[
// 			'date' =>  '2019-11'
// 			'event' => 'name4'
// 		],
// 		[
// 			'date' =>  '2020-10'
// 			'event' => 'name5'
// 		],
// 		[
// 			'date' =>  '2020-10'
// 			'event' => 'name6'
// 		],
// 		[
// 			'date' =>  '2020-11'
// 			'event' => 'name5'
// 		],
// 		[
// 			'date' =>  '2020-11'
// 			'event' => 'name6'
// 		],
// 		[
// 			'date' =>  '2020-12'
// 			'event' => 'name7'
// 		],
// 		[
// 			'date' =>  '2020-12'
// 			'event' => 'name8'
// 		],
// 		[
// 			'date' =>  '2020-12'
// 			'event' => 'name9'
// 		],
// 	]
// 
// Напишите код, которой переделает структуру данных вот в такую:

// [
// 	2019: [
// 		11: [массив событий],
// 		12: [массив событий],
// 	],
// 	2020: [
// 		10: [массив событий],
// 		11: [массив событий],
// 		12: [массив событий],
// 	]
// ]

$events = [
	[
		'date' =>  '2019-12',
		'event' => 'name1'
	],
	[
		'date' =>  '2019-12',
		'event' => 'name2'
	],
	[
		'date' =>  '2019-11',
		'event' => 'name3'
	],
	[
		'date' =>  '2019-11',
		'event' => 'name4'
	],
	[
		'date' =>  '2020-10',
		'event' => 'name5'
	],
	[
		'date' =>  '2020-10',
		'event' => 'name6'
	],
	[
		'date' =>  '2020-11',
		'event' => 'name5'
	],
	[
		'date' =>  '2020-11',
		'event' => 'name6'
	],
	[
		'date' =>  '2020-12',
		'event' => 'name7'
	],
	[
		'date' =>  '2020-12',
		'event' => 'name8'
	],
	[
		'date' =>  '2020-12',
		'event' => 'name9'
	],
];

$transformedEvents = [];

foreach ($events as $event) {
    $date = $event['date'];
    $year = mb_substr($date, 0, 4);
    $month = mb_substr($date, 5, 2);
    
    if (!isset($transformedEvents[$year])) {
        $transformedEvents[$year] = [];
    }
    
    if (!isset($transformedEvents[$year][$month])) {
        $transformedEvents[$year][$month] = [];
    }
    
    $transformedEvents[$year][$month][] = [
        'date' => $date,
        'event' => $event['event']
    ];
}

echo "<pre>";
print_r($transformedEvents);
echo "</pre>";
