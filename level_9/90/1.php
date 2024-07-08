<?php
function max_depth(array $array)
{
    $max_depth = 1;

    foreach ($array as $value) {
        if (is_array($value)) {
            $depth = max_depth($value) + 1; 
            if ($depth > $max_depth) {
                $max_depth = $depth; 
            }
        }
    }

    return $max_depth;
}

$arr1 = [1, 2, 3];
$arr2 = [1, [2, 3]];
$arr3 = [1, [2, [3]]];
$arr4 = [1, [2, [3, [4]]]];

echo "Максимальная глубина массива \$arr1: " . max_depth($arr1) . "<br>";
echo "Максимальная глубина массива \$arr2: " . max_depth($arr2) . "<br>";
echo "Максимальная глубина массива \$arr3: " . max_depth($arr3) . "<br>";
echo "Максимальная глубина массива \$arr4: " . max_depth($arr4) . "<br>";
