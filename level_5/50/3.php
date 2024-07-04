<?php
	function trans($text) {
	    $translit = array(
	        'а' => 'a',   'б' => 'b',   'в' => 'v',
	        'г' => 'g',   'д' => 'd',   'е' => 'e',
	        'ё' => 'yo',  'ж' => 'zh',  'з' => 'z',
	        'и' => 'i',   'й' => 'y',   'к' => 'k',
	        'л' => 'l',   'м' => 'm',   'н' => 'n',
	        'о' => 'o',   'п' => 'p',   'р' => 'r',
	        'с' => 's',   'т' => 't',   'у' => 'u',
	        'ф' => 'f',   'х' => 'kh',  'ц' => 'ts',
	        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'shch',
	        'ъ' => '^^',  'ы' => 'y',   'ь' => '^',
	        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
	        'А' => 'A',   'Б' => 'B',   'В' => 'V',
	        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
	        'Ё' => 'Yo',  'Ж' => 'Zh',  'З' => 'Z',
	        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
	        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
	        'О' => 'O',   'П' => 'P',   'Р' => 'R',
	        'С' => 'S',   'Т' => 'T',   'У' => 'U',
	        'Ф' => 'F',   'Х' => 'Kh',  'Ц' => 'Ts',
	        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Shch',
	        'Ъ' => '&&',    'Ы' => 'Y',   'Ь' => '&',
	        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
	    );
	    return strtr($text, $translit);
	}
	if(isset($_POST['russian_text'])) {
	    $cText = $_POST['russian_text'];
	    $transText = trans($cText);
	} else {
	    $transText = '';
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
	<form action="3.php" method="post">
        <textarea name="russian_text"><?php echo htmlspecialchars($cText); ?></textarea>
		<br>
        <textarea><?php echo htmlspecialchars($transText); ?></textarea>
		<br>
        <button type="submit">Webrise</button>
    </form>
</body>
</html>

<?php
//Дана форма с двумя текстареа. В первый текстареа вводится русский текст. Сделайте так, чтобы после отправки формы во втором текстареа появился транслит этого текста.