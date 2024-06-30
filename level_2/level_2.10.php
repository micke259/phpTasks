<?php
//№1 Дана строка с буквами и цифрами. Проверьте, что в этой строке не более трех букв.

$n_1 = 'хуй012380';


function cum(string $string){
	$count = 0;
	$arr_1 = array_filter(mb_str_split($string), fn($item)=>$item!=0);
	foreach ($arr_1 as $v) {
		if ((int)$v===0){
			$count++;
		}
	}
	if($count <= 3){
			echo 'В строке не более трёх букв';
	}else{
			echo '[object Object]';
	}
}

cum($n_1);

// №2 Дано число. Получите первую четную цифру с конца этого числа.

$n_2 = 12345312143;

echo '<pre>';
$arr_2=array_reverse(array_filter(str_split(strrev($n_2)), fn($item)=>$item%2==0));
$number = array_pop($arr_2);
echo "<pre>";
print_r($number);

//№3 Дана некоторая строка: 'abcde abcde abcde' Замените в ней первый символ каждого слова на '!': '!bcde !bcde !bcde'
echo "<pre>";
$n_3 = 'хуй хуй хуй';
$arr_3 = explode(' ', $n_3);

function cum2(array $arr_3){
    foreach ($arr_3 as $k => $v) {
        $arr_3[$k] = '!' . mb_substr($v, 1);
    }
    $string = implode(' ', $arr_3);
    echo $string;
}

cum2($arr_3);

//№4 Дан массив с числами: [1, 2, 3, 3, 4, 5] Проверьте, что в этом массиве есть два одинаковых элемента подряд.

$arr_4 = [1, 2, 3, 3, 4, 5];
echo "<pre>";
for ($i=1; $i<count($arr_4);$i++){
	if($arr_4[$i-1]===$arr_4[$i]){
		echo "в этом массиве есть два одинаковых элемента подряд";
		break;
	}
}