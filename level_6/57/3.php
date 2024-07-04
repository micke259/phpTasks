<?php
//По заходу на страницу заполните селект числами от первого до последнего дня текущего месяца.
echo "<select>";
$start = date(strtotime("first day of this month"));
$end = date(strtotime("last day of this month"));

for ($i=$start; $i<=$end;$i+=86400){
	echo "<option>".date("Y-M-d", $i)."</option>";
}
echo "</select>";