<?php
// Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите из него протокол:

// 'http';

$url = 'http://test.com/dir1/dir2/dir3/page.html';

$parsed = parse_url($url);

echo $parsed['scheme'];
