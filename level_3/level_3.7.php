<?php
//№1 Дана строка со словами. Отсортируйте слова в алфавитном порядке.

$n_1 = 'Абсолютно быстрый белый барсук бегал бодро, восхищая авантюрных артистов. Благоухание базилика амбициозно витало в бескрайних болотах, привлекая антикваров. Большие бурые бобры бодро бегали, артефакты обыскивая. Абстрактные бронзовые браслеты аномально блестели на августовском солнце';

$arr_1 = explode(' ', mb_strtolower($n_1));
$temp = natsort($arr_1);
echo "<pre>";
print_r($arr_1);

//№2 Дано число. Получите массив делителей этого числа.

$n_2 = 65535;
$arr_2 = [];
for($i = 1;$i<=$n_2;$i++){
	if($n_2 % $i === 0){
		$arr_2[]=$i;
	}
}

print_r($arr_2);

//№3 Даны два числа. Получите массив общих делителей этих чисел.

$a_3 = 65535;
$b_3 = 53556;
$arr_3 = [];
for($i = 1;$i<=$b_3;$i++){
	if($a_3%$i===0 && $b_3%$i === 0){
		$arr_3[]=$i;
	}
}

print_r($arr_3);

//№4 Дано число. Проверьте, что у этого числа есть только один делитель, кроме него самого и единицы.

$a_4 = 4;
$count = 0;

for($i=2; $i < $a_4; $i++){
	if($a_4%$i===0){
		$count++;
	}
	if($count>1){
		break;
	}
}

echo $count===1 ? "у этого числа есть только один делитель, кроме него самого и единицы.": "[object Object]";

//№5 Через запятую написаны числа. Получите максимальное из этих чисел.

$n_5 ='-6,-5,-5,-3,-5';
$arr_5 = explode(',',$n_5);

function mySort(array $array): int{
	$max = $array[0];
	foreach( $array as $value ){
		if($value>$max){
			$max = $value;
		}
	}
	return $max;
}
echo "<pre>";
echo mySort($arr_5);

//№6 Дан массив с числами. После каждого однозначного числа вставьте еще такое же.

$arr_6 = [1,2,3,4,5,6,11,1123];
$newArr =[];
foreach( $arr_6 as$value ){
	$newArr[]=$value;
	if(strlen($value)===1){
		$newArr[]=$value;
	}
}
print_r($newArr);
echo "<pre>";

//№7 Дана строка. Удалите из нее все гласные буквы.
$n_7 = 'Абсолютно быстрый белый барсук бегал бодро, восхищая авантюрных артистов. Благоухание базилика амбициозно витало в бескрайних болотах, привлекая антикваров. Большие бурые бобры бодро бегали, артефакты обыскивая. Абстрактные бронзовые браслеты аномально блестели на августовском солнце';

$bukvas =['а', 'е', 'ё', 'и', 'о', 'у','ы', 'э', 'ю', 'я'];
$arr_7 = mb_str_split(mb_strtolower($n_7));
foreach( $arr_7 as $key=>$value ){
	foreach ($bukvas as $value1) {
		if($value === $value1){
			$arr_7[$key] = null;
		}
	}
}

print_r(implode('', $arr_7));

//№8 Дана строка. Сделайте заглавной последнюю букву каждого слова в этой строке.

$n_8 = 'Absolutely astounding artistry attracts avid audiences, amplifying amazing aspirations. Affectionate animals admire adventurous antics, always acknowledging admirable achievements. Ancient artifacts await analytical assessment, arousing ardent academic ambitions.';

$arr_8 = explode(" ",str_replace(",","",str_replace(".","",$n_8)));


foreach( $arr_8 as $key=>$value ){
	for($i=0; $i<mb_strlen($value); $i++){
		$arr_8[$key] = str_replace($value[-1], strtoupper($value[-1]), $value);
	}
}
echo "<pre>";
print_r(implode(" ", $arr_8));