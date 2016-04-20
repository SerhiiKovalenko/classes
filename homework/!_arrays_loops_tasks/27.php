<?php
/*26. 27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице,
$cols - кол-во столбцов в таблице. Есть список цветов, в массиве:
$colors = array('red','yellow','blue','gray','maroon','brown','green').
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
В каждой ячейке должно находиться случайное число.*/

$row = 4;
$cols = 4;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table>";
for ($i = 1; $i <= $row; $i++) {
    echo "<tr>";
    for ($x = 1; $x <= $cols; $x++) {
        echo "<td style='background-color: ".$colors[array_rand($colors)].";'>" .rand(100, 999). "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

