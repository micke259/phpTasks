<?php
//№1

$n_1=213214;
settype($n_1,"string");
echo $n_1[0];
echo "<pre>";
//№2
$n_2=213214;
settype($n_2,"string");
echo $n_2[-1];
echo "<pre>";
//№3
$n_3=213214;
settype($n_3,"string");
echo $n_3[0] + $n_3[-1];
echo "<pre>";
//№4
$n_4=2132142;
settype($n_4,"string");
echo strlen($n_4);
echo "<pre>";
//№5
$n_5=123123123;
$b_5=14568904568968045;
settype($n_5,"string");
settype($b_5,"string");
echo $n_5[0]===$b_5[0] ? "Первые цифры чисел $n_5 и $b_5 совпадают": "Первые цифры чисел $n_5 и $b_5 не совпадают";
echo "<pre>";