<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Таблица из массива</title>

</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Колонка 1</th>
                <th>Колонка 2</th>
                <th>Колонка 3</th>
                <th>Колонка 4</th>
                <th>Колонка 5</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            $colCount = 5;
            $rowCount = ceil(count($arr) / $colCount);
            $index = 0;

            for ($row = 0; $row < $rowCount; $row++) {
                echo "<tr>";
                for ($col = 0; $col < $colCount; $col++) {
                    if ($index < count($arr)) {
                        echo "<td>{$arr[$index]}</td>";
                        $index++;
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
