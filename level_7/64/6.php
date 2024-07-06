<?php
//Сформируйте ul, в пунктах которого будут дни с первого по последний текущего месяца. Текущий день, а также выходные, выделите другими цветами. Пусть программа сохранит полученный результат в HTML файл.

$date = new DateTime("");
 
$start = strtotime($date->format("Y-m-01"));
$end = strtotime($date->format("Y-m-t"));


$html ="<ul>";
for($i=$start;$i<=$end;$i+=86400){
	
	if(date("N",$i)>5){
		$html.="<li style="."color:red".">".date("Y-m-d",$i)."</li>";
	}elseif(date("Y-m-d",$i)===date("Y-m-d")){
		$html.="<li style="."color:blue".">".date("Y-m-d",$i)."</li>";
	}
	else{
		$html.="<li>".date("Y-m-d",$i)."</li>";
	}
}
$html .="</ul>";

file_put_contents("../../texts/level_7/64/wtf.html", $html);

