<?php

$names =['1.govno','2.govno','3.govno','4.govno','5.govno'];
foreach ($names as $name) {
	file_put_contents("../../texts/level_7/64/7/". $name,"Жопа");
}