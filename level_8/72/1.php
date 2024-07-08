<?php
//Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите из него имя страницы:

// 'page.html';

$url = 'http://test.com/dir1/dir2/dir3/page.html';

$result = basename(parse_url($url, PHP_URL_PATH));
print_r($result);