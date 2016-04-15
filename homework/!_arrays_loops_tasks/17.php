<?php
/* 17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
    месяц выведите жирным. Текущий месяц должен храниться в переменной $month.*/
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

