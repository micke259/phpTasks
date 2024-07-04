<?php
	$date = new DateTime("");
	$currYear = $date->format("Y");
	$startDay = date("$currYear-01-01");
	$endDay = date("$currYear-12-31");
	$start = strtotime($startDay);
	$end = strtotime($endDay);	
	$weekends = [];

	for($i=$start; $i<=$end; $i+=86400){
		if(date("N",$i)>=6){
			$weekends[] = date("Y-m-d", $i);
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>
		<?php
			foreach($weekends as $weekend){
				echo "<li>"."<p>".$weekend."</p>"."</li>";
			}
			
		?>
	</ul>
</body>
</html>
<?php
//Выведите даты всех выходных дней текущего года в виде списка ul.