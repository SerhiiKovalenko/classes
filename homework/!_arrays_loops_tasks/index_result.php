<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по массивам и циклам</title>
</head>
<body>

<h1>Задачи по массивам и циклам</h1>

<p><b>Все задания должны выполняться в папке arrays_loops_tasks, в отдельных файлах, которые должны называться по номеру задания, например, "17.php".<br>
        Если задание требует создания нескольких файлов - то такие файлы необходимо размещать в папке, название которой равно номеру задания.</b>
</p>

<p>
    <b>Вопросы можно задавать на <a href="http://ask.php-academy.kiev.ua/" target="_blank">http://ask.php-academy.kiev.ua/</a>.</b>
</p>

<hr>

<b>Работа с foreach</b>
<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>
<?PHP
$mass = array('html', 'css', 'php', 'js', 'jq');
foreach ($mass as $valua) {
    echo "$valua <br>";
}
?>

<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.</p>
<?PHP
$mass = array(1, 20, 15, 17, 24, 35);
foreach ($mass as $valua) {
    $result += $valua;
}
echo $result;
?>

<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>
<?PHP
$mass = array(26, 17, 136, 12, 79, 15);
foreach ($mass as $valua) {
    $result_1 += pow($valua, 2);
}
echo $result_1;
?>

<br>
<b>Работа с ключами</b>

<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
    помощью второго — столбец элементов.</p>
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
<?PHP
$mass = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($mass as $key => $valua) {
echo "$key <br>";
}
foreach ($mass as $key => $valua) {
echo "$valua <br>";
}
?>

<p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
    цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
    долларов.'.</p>
<?php
$mass = array('Коля'=>'200', 'Вася'=>'300','Петя'=>'400');
foreach ($mass as $key => $valua) {
    echo "$key — зарплата $valua долларов.<br>";
}
?>

<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
    русские — в массив $ru.
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en = array('green', 'red','blue');
    $ru = array('зеленый', 'красный', 'голубой');</p>
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
foreach ($arr as $key => $val) {
    $en [] = $key;

    $ru = array();
    foreach ($arr as $key => $val) {
        $ru [] = $val;

    }
}
print_r($en);
echo "<br>";
print_r($ru);
?>

<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
    выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>
<?php
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $value) {
    if ($value > 3 && $value < 10) {
        echo "$value <br>";
    }
}

?>

<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
    '­1­2­3­4­5­6­7­8­9­'.</p>
<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $value) {
    echo "-$value";
}
echo "-";
?>

<p>Циклы while и for</p>
<p>9. Выведите столбец чисел от 1 до 100.</p
<?php
for ($i = 1; $i<=100; $i++) {
    echo "$i<br>";
}
?>

<p>10. Выведите столбец чисел от 11 до 33.</p>
<?php
for ($i = 11; $i<=33; $i++) {
    echo "$i<br>";
}
?>
<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.</p>
<?php
for ($i = 0; $i<=100; $i++) {
    if ($i % 2 == 0) {
        echo "$i<br>";
	}
}
?>
<p>12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
    меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
    этого (итерации — это количество проходов цикла), и запишите его в переменную $num.</p>
<?php
for ($n = 1000, $num = 0; $n >= 50; $n = $n / 2, $num++) {
}
echo "$n<br>";
echo "$num<br>";
?>

<p>13. Вывести таблицу умножения</p>
<?php
for ($x = 1; $x <= 10; $x++) {
    for ($y = 1; $y <= 10; $y++)
        echo $x. "*" .$y. "=" .($x*$y). "<br>";
}
?>
<p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
    проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
    выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>
<?php
$mass = array(4, 2, 5, 19, 13, 0, 10);
foreach ($mass as $e) {
    if ($e == 2 || $e == 3 || $e == 4) {
        echo "Есть!";
        break;
    } else {
        echo "Нет!";
        break;
    }
}
?>

<p>15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
    элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
    5, 19, 13, 0, 10.</p>
<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $value) {
    $count += count($value);
}
echo $count;
?>

<p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
    выведите на экран столбец элементов массива, как показано на картинке.
    1, 2, 3
    4, 5, 6
    7, 8, 9</p>
<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $value) {
    if ($value % 3 == 0) {
        echo "$value <br>";
    } else {
        echo "$value, ";
    }
}
?>

<p>17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
    месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
<?php
$arr = array(January, February, March, April, May, June, July, August, September, October, November, December);
$month = April;
foreach ($arr as $value) {
    if ($value == $month) {
        echo " <b>$value</b> ";
    } else {
        echo " $value ";
    }
}
?>

<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    выходные дни следует вывести жирным.</p>
<?php
$arr = array(work => Monday, work1 => Tuesday, work2 => Wednesday, work3 => Thursday, work4 => Friday, holiday1 => Saturday, holiday2 => Sunday);

foreach ($arr as $key => $value) {
    if ($key == holiday1 || $key == holiday2) {
        echo " <b>$value</b> ";
    } else {
        echo " $value ";
    }
}
?>

<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
    текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
<?php
$arr = array(Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday);
$day = Saturday;
foreach ($arr as $value) {
    if ($value == $day) {
        echo " <b>$value</b> ";
    } else {
        echo " $value ";
    }
}
?>

<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
    рядов, а не 5.<br><br>
    x<br>
    xx<br>
    xxx<br>
    xxxx<br>
    xxxxx</p>
<?php
for ($x = 1; $x <= 20; $x++) {
    for ($i = 1; $i <= $x; $i++) {
        echo "x";
    }
    echo "<br>";
}
?>

<p>21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
    рядов, а не 5.<br><br>
    1<br>
    22<br>
    333<br>
    4444<br>
    55555</p>
<?php
for ($x = 1; $x <= 9; $x++) {
    for ($i = 1; $i <= $x; $i++) {
        echo $x;
    }
    echo "<br>";
}
?>

<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p>
<p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
    пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
    2, 3, т. е. 6.</p>
По желанию можете сделать проверку на корректность введения данных пользователем.
<?php
function sum ($sum = null) {
    if (is_int($sum)) {
        $sum = array_sum(str_split($sum));
        return $sum;
    } else {
        return "Enter the correct data";
    }
}
$valua = sum("123asd");
echo $valua;

?>

<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза.</p>
<?php
function substr_count_search($number, $number_search) {
    $x += substr_count_search($number, $number_search);
    return $x;
}
$valua = substr_count(442158755745, 5);
echo $valua;
?>

<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.</p>
<?php
$arr = array (rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand()); // создали массив
echo "<pre>";
print_r($arr); // отобразили массив

$max = max($arr); // нашли максимальное значение и записали его в переменную
$min = min($arr); // нашли минимальное значение и записали его в переменную
$key_max = array_search(max($arr), $arr); // нашли ключ максимального значения и записали его в переменную
$key_min = array_search(min($arr), $arr); // нашли ключ минимального значения и записали его в переменную
echo "Максимальное значение " .$max. " с ключом " .$key_max; // показали для наглядности
echo "<pre>";
echo "Максимальное значение " .$min. " с ключом " .$key_min; // показали для наглядности

$arr[$key_min] = $max; // замена 1
$arr[$key_max] = $min; // замена 2
echo "<pre>";
print_r($arr); // вывод результата

?>
<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
    Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
    индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
    индекс.</p>
<p>27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. <br><br>

    Пример результата:<br>

<table><tr><td style='background-color:blue'>2033</td><td style='background-color:brown'>11696</td><td style='background-color:green'>712</td><td style='background-color:yellow'>32583</td><td style='background-color:red'>157</td></tr><tr><td style='background-color:gray'>25694</td><td style='background-color:red'>19724</td><td style='background-color:brown'>18487</td><td style='background-color:brown'>8462</td><td style='background-color:red'>4412</td></tr><tr><td style='background-color:gray'>4673</td><td style='background-color:gray'>14450</td><td style='background-color:maroon'>16748</td><td style='background-color:gray'>3505</td><td style='background-color:maroon'>5299</td></tr><tr><td style='background-color:red'>16873</td><td style='background-color:gray'>21370</td><td style='background-color:green'>22482</td><td style='background-color:red'>28576</td><td style='background-color:blue'>26060</td></tr><tr><td style='background-color:yellow'>28955</td><td style='background-color:gray'>8804</td><td style='background-color:gray'>26825</td><td style='background-color:red'>31471</td><td style='background-color:blue'>22283</td></tr></table>

</p>


<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>
<?php
for ($x = 1; $x <= 10; $x++) {
    for ($y = 1; $y <= 10; $y++)
        echo $x. "*" .$y. "=" .($x*$y). "<br>";
}
?>

<hr>

<p>
    <b>&copy; 2014-2016 <a href="http://php-academy.kiev.ua/" target="_blank">PHP Academy</a></b>
</p>

</body>
</html>