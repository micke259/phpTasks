<?php
//№1
echo "<pre>";
for( $i = 1; $i <= 100; $i++){
	echo "$i ";
}
echo "<pre>";
//№2

for( $i = -100; $i <0; $i++){
	echo "$i ";
}
echo "<pre>";
//№3

for($i=100; $i > 0; $i--){
	echo "$i ";
}
echo "<pre>";
//№4
for( $i = 1; $i <= 100; $i++){
	echo $i%2 ===0 ? "$i ":"";
}
echo "<pre>";

//№5
for( $i = 1; $i <= 100; $i++){
	echo $i%3 ===0 ? "$i ":"";
}
echo "<pre>";