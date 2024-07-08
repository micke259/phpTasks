<?php
//Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите из него имя домена:

// 'test.com';'

$url = 'http://test.com/dir1/dir2/dir3/page.html';
$parsed = parse_url($url);
$result = $parsed['host'];
echo $result;

