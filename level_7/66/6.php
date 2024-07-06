<?php
//Дан такой объект:

// <?php
// 	$data = [
// 		2018: [
// 			11: [
// 				29: [1, 2, 3],
// 				30: [4, 5],
// 			],
// 			12: [
// 				30: [6, 7],
// 				31: [8, 9],
// 			],
// 		],
// 		2019: [
// 			12: [
// 				29: [10, 11],
// 				30: [12, 13],
// 				31: [14, 15],
// 			]
// 		],
// 	]

// Запишите все элементы этого объекта в какой-нибудь массив, вот так:

// [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]

$data = [
    2018 => [
        11 => [
            29 => [1, 2, 3],
            30 => [4, 5],
        ],
        12 => [
            30 => [6, 7],
            31 => [8, 9],
        ],
    ],
    2019 => [
        12 => [
            29 => [10, 11],
            30 => [12, 13],
            31 => [14, 15],
        ]
    ],
];

function treeToFlat($array) {
    $result = [];
    array_walk_recursive($array, function($item) use (&$result) {
        $result[] = $item;
    });
    return $result;
}

$result = treeToFlat($data);
$wtf = array_merge_recursive(...array_merge_recursive(...array_merge_recursive(...$data)));
echo "<pre>";
print_r($wtf);
echo "</pre>";