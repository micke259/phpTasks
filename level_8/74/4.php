<?php
// Дан список городов и их стран, хранящийся в следующей структуре:


// 	$data = [
// 		[
// 			'country' => 'country1',
// 			'city' =>    'city11',
// 		],
// 		[
// 			'country' => 'country2',
// 			'city' =>    'city21',
// 		],
// 		[
// 			'country' => 'country3',
// 			'city' =>    'city31',
// 		],
// 		[
// 			'country' => 'country1',
// 			'city' =>    'city12',
// 		],
// 		[
// 			'country' => 'country1',
// 			'city' =>    'city13',
// 		],
// 		[
// 			'country' => 'country2',
// 			'city' =>    'city22',
// 		],
// 		[
// 			'country' => 'country3',
// 			'city' =>    'city31',
// 		],
// 	];

// Напишите код, которой переделает структуру данных вот в такую:

// [
// 	'country1': [
// 		'city11', 'city12', 'city13',
// 	],
// 	'country2': [
// 		'city21', 'city22'
// 	],
// 	'country3': [
// 		'city31', 'city32'
// 	],
// ]

$data = [
    [
        'country' => 'country1',
        'city' => 'city11',
    ],
    [
        'country' => 'country2',
        'city' => 'city21',
    ],
    [
        'country' => 'country3',
        'city' => 'city31',
    ],
    [
        'country' => 'country1',
        'city' => 'city12',
    ],
    [
        'country' => 'country1',
        'city' => 'city13',
    ],
    [
        'country' => 'country2',
        'city' => 'city22',
    ],
    [
        'country' => 'country3',
        'city' => 'city32',
    ],
];
$result = [];
foreach ($data as $item){
	$country = $item['country'];
	$city = $item['city'];

	if(!isset($result[$country])){
		$result[$country] = [];
	}

	if (!in_array($city, $result[$country])) {
        $result[$country][] = $city;
    }
}
echo "<pre>";
print_r($result);