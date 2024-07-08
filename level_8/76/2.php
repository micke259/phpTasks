<?php
//Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите содержимое первой папки:

// 'dir1'

$url = 'http://test.com/dir1/dir2/dir3/page.html';

$paths = parse_url($url, PHP_URL_PATH);

$dirs = explode('/', trim($paths, '/'));

echo $dirs[0];
