<?php
//Сделайте функцию, которая будет возвращать дату следующей масленницы, которая празднуется в последнее воскресенье зимы.
function RuMegaFlex(){
	$currDate = new DateTime();
	$targetYear = (int) $currDate->format("Y")+1;

	$flexDay = new DateTime("last sunday of February $targetYear");
	return $flexDay->format("Y-m-d");
}

echo "<pre>";
echo "Дата следующей масленницы: ".RuMegaFlex();

