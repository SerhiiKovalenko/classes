<?php
/* 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    выходные дни следует вывести жирным.*/
$arr = array(work => Monday, work1 => Tuesday, work2 => Wednesday, work3 => Thursday, work4 => Friday, holiday1 => Saturday, holiday2 => Sunday);

foreach ($arr as $key => $value) {
    if ($key == holiday1 || $key == holiday2) {
        echo " <b>$value</b> ";
    } else {
        echo " $value ";
    }
}
?>