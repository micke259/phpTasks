<?php

function checkYear(int $year){
	echo checkdate(2,29, $year) ? "Этот год високосный": "Этот год обычный";
}

checkYear(2024);