<?php
/*25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.*/

$arr = array (rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand()); // создали массив
echo "<pre>";
print_r($arr); // отобразили массив

$max = max($arr); // нашли максимальное значение и записали его в переменную
$min = min($arr); // нашли минимальное значение и записали его в переменную
$key_max = array_search(max($arr), $arr); // нашли ключ максимального значения и записали его в переменную
$key_min = array_search(min($arr), $arr); // нашли ключ минимального значения и записали его в переменную
echo "Максимальное значение " .max($arr). " с ключом " .$key_max; // показали для наглядности
echo "<pre>";
echo "Максимальное значение " .$min. " с ключом " .$key_min; // показали для наглядности

$arr[$key_min] = $max; // замена 1
$arr[$key_max] = $min; // замена 2
echo "<pre>";
print_r($arr); // вывод результата

?>

