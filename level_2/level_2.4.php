<?php
//№1 Дана некоторая строка с буквами и цифрами. Получите позицию первой цифры в этой строке.
$n_1 = 'asd123asdsad';

for ($i=0; $i<strlen($n_1); $i++){
	$result = $n_1[$i];
	if(ctype_digit($result)){
	echo strpos($n_1,$n_1[$i]);
	break;
	}
}
//№2 Дан объект с ключами и значениями. Запишите в первый массив ключи объекта, а во второй - значения.

$n_2 = new stdClass();
$n_2->name = '213';
$n_2->value = '123123';
$n_2->type = '123321';
$n_2->whatever = 'penis';
echo '<pre>';
print_r($n_2);
echo '<pre>';
$arr_2 = (array)$n_2;

$keysArr = [];
$valuesArr = [];
foreach ($arr_2 as $k => $v){
	array_push($keysArr, $k);
	array_push($valuesArr, $v);
}
echo '<pre>';
print_r($keysArr);
print_r($valuesArr);
echo '<pre>';
//№3 Дано число. Выведите в консоль количество четных цифр в этом числе.

$n_3 = 1234512390890123;
$str_3 = (string)$n_3;
function cum($str_3){
	$count = 0; 
	for($i=0; $i<strlen($str_3); $i++){
		if ($str_3[$i]%2===0){
			$count++;
		}	
	}
	echo $count;
}
echo '<pre>';
cum($str_3);
//№4 Дана некоторая строка: 'abcde' Переведите в верхний регистр все нечетные буквы этой строки. В нашем случае должно получится следующее:'AbCdE'
$n_4 = 'abcde';
echo '<pre>';
function cum2($input) {
    $result = '';
    for ($i = 0; $i < strlen($input); $i++) {
        if ($i % 2 === 0) {
            $result .= strtoupper($input[$i]);
        } else {
            $result .= $input[$i];
        }
    }
    echo $result;
}
cum2($n_4);
//№5 Дана некоторая строка со словами: 'aaa bbb ccc' Сделайте заглавным первый символ каждого слова в этой строке. В нашем случае должно получится следующее: 'Aaa Bbb Ccc'

echo '<pre>';


function cum3($input) {
    $words = explode(' ', $input);
    $words = array_map(fn($word)=>ucfirst($word), $words);
    return implode(' ', $words);

}


$n_5 = 'aaa bbb ccc';
$result = cum3($n_5);
echo $result; 

