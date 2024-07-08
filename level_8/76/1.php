<?php
//Дано меню со ссылками. Покрасьте в красный цвет ту ссылку, адрес которой совпадает с URL из адресной строки браузера.

$menu = [
    'Home' => 'http://example.com/home',
    'About' => 'http://example.com/about',
    'Services' => 'http://example.com/services',
    'Contact' => 'http://example.com/contact'
];


$currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>

</head>
<body>
    <ul>
        <?php foreach ($menu as $name => $url): ?>
            <li>
                <a href="<?=$url;?>" class="<?= ($url == $currentUrl) ? 'active' : ''; ?>">
                    <?= $name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
	<style>
        .active {
            color: red;
        }
    </style>
</body>
</html>

