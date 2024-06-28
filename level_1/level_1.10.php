<?php
//№1

$arr_1 = [];

for( $i = 0; $i < 50; $i++){
	array_push($arr_1, rand(1,100));
}

echo"<pre>";
print_r($arr_1);
echo "<pre>";

//№2

$n_2= '12345';
$b_2=strrev($n_2);

echo "<script>console.log('$b_2')</script>";
//№3

$arr_3=[1,2,3,4,5,6];

for ($i = 0; $i < count($arr_3); $i += 2) {
    
    $subarray = array_slice($arr_3, $i, 2);
    
    print_r($subarray);
}

//№4

$arr4_1 = [1, 2, 3];
$arr4_2 = [4, 5, 6];
echo '<pre>';
print_r (array_merge($arr4_1, $arr4_2));
echo '<pre>';