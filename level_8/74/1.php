<?php
//По заходу на страницу запишите в сессию время захода юзера. После обновления страницы выведите на экран время последнего захода юзера.

session_start();
$current_time = date('Y-m-d H:i:s');

if (isset($_SESSION['last_visit'])) {
    echo 'Время последнего захода: ' . $_SESSION['last_visit'];
} else {
    echo 'Это ваш первый визит!';
}

$_SESSION['last_visit'] = $current_time;

