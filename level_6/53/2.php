<?php
//Дан следующий массив:
	$arr = [
		['href'=>'page1.html', 'text'=>'text1'],
		['href'=>'page2.html', 'text'=>'text2'],
		['href'=>'page3.html', 'text'=>'text3'],
	];
//Сформируйте с его помощью следующий HTML код:
// <ul>
// 	<li><a href="page1.html">text1</a></li>
// 	<li><a href="page2.html">text2</a></li>
// 	<li><a href="page3.html">text3</a></li>
// </ul>	
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
			foreach($arr as $v) {
				 echo "<li>
				 <a href='".$v['href'] ."'>".$v['text']."</a>
				 </li>";
			}
		?>
	</ul>
</body>
</html>