<?php
//Сделайте функцию, которая будет возвращать сколько дней осталось до ближайшего 29 февраля.

function daysTo29Feb(){
	$currDate = new DateTime();
	$currYear =(int) $currDate->format("Y");
	$_29Feb = new DateTime("$currYear-02-29");
	if($currDate >=$_29Feb){
		$currYear++;
		while(!checkdate(2,29,$currYear)){
			$currYear++;
		}
		$_29Feb = new DateTime("$currYear-02-29");

		return $currDate->diff($_29Feb)->days+1;
	}
}

echo "<pre>";
echo "до ближайшего 29 февраля осталось ".daysTo29Feb()." дней";	