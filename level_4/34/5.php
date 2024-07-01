<?php

//№5 Сделайте функцию, которая параметром будет принимать число и удалять из него четные цифры.

function cum(int $number){
	$numStr = str_split($number);

	for($i=0;$i<count($numStr);$i++){
		if(((int)$numStr[$i])%2===0){
			unset($numStr[$i]);
		}
	}

	return (int)implode($numStr);
}

echo cum(123034645123);