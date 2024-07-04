<?php
	if(isset($_POST["textarea"])){
		$words = explode(" ",
		trim(
		preg_replace("/[!?.,]/"," ",$_POST["textarea"])
		 )
		);
		$arr = array_count_values($words);
		$procent = [];
		$length = mb_strlen($_POST['textarea']);
		foreach ($arr as $word => $count) {
			$procent[$word] = ($count/$length)*100 ."%";
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
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<textarea name="textarea">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto labore aperiam quasi debitis sunt. Vero facilis rerum placeat iste distinctio maxime ipsam, consequatur fugiat rem corporis odio omnis. Quaerat, soluta.
		</textarea>
		<button>sub</button>
	</form>
	<table>
		<tbody>
			
				<?php
					foreach ($arr as $key => $value) {
						echo "<tr>";
						echo "<td>".$key."</td>";
						echo "<td>".$value."</td>";
						echo "<td>".$procent[$key]."</td>";
						echo "</tr>";
					}
				?>
			
		</tbody>
	</table>
</body>
</html>

<?php
//Дана форма с текстареа. В текстареа вводится текст со словами. По отправки формы сделайте таблицу, в первой колонке которой будут слова из текста, во второй колонке - количество раз, которое это слово встречается, а в третьей - процентное содержание этого слова в текста.