<?php
//Сделайте функцию, которая параметром будет принимать слово и возвращать массив его слогов.

function yaEbal($word) {
    $result = [];
    $bukvas = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];
    $slog = '';
    $length = mb_strlen($word);

    for ($i = 0; $i < $length; $i++) {
        $item = mb_substr($word, $i, 1);
        $slog .= $item;
		
        if (in_array(mb_strtolower($item), $bukvas) || $i === $length - 1) {
            $result[] = $slog;
            $slog = '';
        }
    }



    
  
    return $result;
}
echo "<pre>";
print_r(yaEbal('Километр'));