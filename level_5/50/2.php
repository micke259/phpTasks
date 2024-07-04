<?php

$texts = [
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
    "Nulla facilisi. Duis sollicitudin eros vitae dui consectetur feugiat.",
    "Sed varius orci at nisi iaculis, sit amet scelerisque leo semper.",
    "Vivamus eleifend nisl ac ultrices luctus."
];

function randomColor() {
    $r = rand(0, 255);
    $g = rand(0, 255);
    $b = rand(0, 255);
    return "rgb($r, $g, $b)";
}


$N = 5;
$randomIndex = array_rand($texts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Генерация случайных абзацев</title>
    <style>
        p {
            color: <?php echo randomColor(); ?>;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < $N; $i++)
        echo "<p> $texts[$randomIndex]</p>";
    ?>
</body>
</html>
<?php
//По заходу на страницу сгенерируйте N абзацев так, чтобы они содержали случайный текст и были покрашены в случайный цвет.