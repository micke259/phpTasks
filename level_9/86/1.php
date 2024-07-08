<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 2px solid #000;
            margin: 20px auto;
        }
        th, td {
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid #000;
        }
        .black {
            background-color: #999;
        }
        .white {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $class = ($row + $col) % 2 == 0 ? "black" : "white";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
<?php
//Сгенерируйте HTML таблицу, покрашенную в виде шахматной доски.