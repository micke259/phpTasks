<?php

//Сделайте функцию, которая будет устанавливать правильную форму существительного после числа.
function func(int $number, string $form1, string $form2, string $form5) : string {
    $last_digit = $number % 10;
    
    $last_two_digits = $number % 100;
    
    if ($last_digit === 1 && $last_two_digits !== 11) {
        $result = "{$number} {$form1}";
    } elseif (in_array($last_digit, [2, 3, 4]) && !in_array($last_two_digits, [12, 13, 14])) {
        $result = "{$number} {$form2}";
    } else {
        $result = "{$number} {$form5}";
    }
    
    return $result;
}


echo func(1, 'яблоко', 'яблока', 'яблок') . "<br>"; 
echo func(2, 'яблоко', 'яблока', 'яблок') . "<br>";
echo func(3, 'яблоко', 'яблока', 'яблок') . "<br>"; 
echo func(4, 'яблоко', 'яблока', 'яблок') . "<br>"; 
echo func(5, 'яблоко', 'яблока', 'яблок') . "<br>"; 
echo func(11, 'яблоко', 'яблока', 'яблок') . "<br>";
echo func(12, 'яблоко', 'яблока', 'яблок') . "<br>";
echo func(21, 'яблоко', 'яблока', 'яблок') . "<br>";
echo func(23, 'яблоко', 'яблока', 'яблок') . "<br>";
echo func(1223421, 'яблоко', 'яблока', 'яблок') . "<br>";

