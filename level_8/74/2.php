<?php
//Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите из него папки в виде массива:

// ['dir1', 'dir2', 'dir3']

$url = 'http://test.com/dir1/dir2/dir3/page.html';

$paths = parse_url($url, PHP_URL_PATH);

$dirs = explode('/', trim($paths,'/'));
array_pop($dirs);

echo "<pre>";
print_r($dirs);