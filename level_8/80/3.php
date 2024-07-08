<?php
$arr = [
    [1, 2, 3, 4, 5],
    [1, 2, 3],
    [1, 2],
];

$maxLength = max(array_map('count', $arr));

$result = [];
foreach ($arr as $item) {
    $length = count($item);
    $interval = $maxLength - $length;
    for ($i = 0; $i < $interval; $i++) {
        $item[] = '';
    }
    $result[] = $item; 
}

echo "<pre>";
print_r($result);
echo "</pre>";