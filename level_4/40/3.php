<?php
//Дан текст со словами. Запишите все слова этого текста в специальный объект. Ключами в этом объекте будут буквы, а значениями - массивы слов, начинающихся на эти буквы.

function createWordObject($text) {
    $wordObject = new stdClass();
    
    $words = explode(" ", $text);
    
   
    foreach ($words as $word) {
        $firstLetter = mb_substr($word, 0, 1); 
        $firstLetter = mb_strtolower($firstLetter);
        $wordObject->$firstLetter[] = $word;
    }
    
    return $wordObject;
}

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta enim sequi ea quis nisi tempora temporibus beatae consectetur sit velit voluptate a ratione, rerum, quod debitis ad? Libero, quo commodi!';

$object = createWordObject($text);
echo "<pre>";
var_dump($object);