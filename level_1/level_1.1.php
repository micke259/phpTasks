<?php


//№1
$n_1=2323;

echo $n_1>=0 ? "Число не отрицательное" : "Число отрицательное";
//№2
echo "<pre>";

$n_2 = "asdasdas";
echo "Длина строки $n_2 = ";
echo strlen($n_2);
echo "<pre>";

//№3
echo "<pre>";

$n_3 = "asdasdas";
echo "Последняя буква $n_3 : ";
echo $n_3[-1];
echo "<pre>";

//№4
$n_4 = 124;

echo $n_4 % 2 ===0 ?"Число $n_4 чётное":"Число $n_4 нечётное";

//№5
echo "<pre>";
$n_5 = "Cock";
$b_5 = "clock";

echo strtolower($b_5[0]) === strtolower($n_5[0]) ? "Первая буква слов $n_5 и $b_5 совпадает":"Первая буква слов $n_5 и $b_5 не совпадает";

//N6

echo "<pre>";

$a = 'Моль';



echo mb_substr($a,-1,mb_strlen($a))==='ь' ? mb_substr($a,mb_strlen($a)-2,1) :mb_substr($a,mb_strlen($a),1);