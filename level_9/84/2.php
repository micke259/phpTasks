<?php
session_start();

if (!isset($_SESSION['comments'])) {
    $_SESSION['comments'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['comment'])) {
        $comment = [
            'name' => htmlspecialchars($_POST['name']),
            'comment' => nl2br(htmlspecialchars($_POST['comment'])),
            'created_at' => date("d.m.Y H:i:s")
        ];

        $_SESSION['comments'][] = $comment;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Оставить комментарий</title>
</head>
<body>
    <h2>Оставить комментарий</h2>
    <form action="2.php" method="post">
        <label for="name">Ваше имя:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="comment">Ваш комментарий:</label><br>
        <textarea id="comment" name="comment" required></textarea><br>
        <input type="submit" value="Отправить">
    </form>

    <hr>

    <h2>Комментарии пользователей:</h2>
    <div id="comments">
        <?php
        if (!empty($_SESSION['comments'])) {
            foreach ($_SESSION['comments'] as $comment) {
                echo "<p>" . $comment['name'].":".$comment['comment'] . "</p>";
                echo "Оставлено: ".$comment['created_at']."<br>";
            }
        } else {
            echo "Пока нет комментариев.";
        }
        ?>
    </div>
</body>
</html>
<?php
