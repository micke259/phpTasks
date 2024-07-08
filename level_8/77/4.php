<?php
//Дан список событий за определенные даты, хранящийся в следующей структуре:
$events = [
    '2019-12-29' => ['name1', 'name3', 'name5', 'name7'],
    '2019-12-30' => ['name4', 'name8', 'name9'],
    '2019-12-31' => ['name2', 'name6'],
];

$transformedEvents = [];

foreach ($events as $date => $names) {
    foreach ($names as $name) {
        $transformedEvents[] = [
            'date' => $date,
            'event' => $name
        ];
    }
}
//Напишите код, которой переделает структуру данных вот в такую:
echo "<pre>";
print_r($transformedEvents);
echo "</pre>";

