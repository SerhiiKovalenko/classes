<?php
/* 6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
    русские — в массив $ru.
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en = array('green', 'red','blue');
    $ru = array('зеленый', 'красный', 'голубой'); */

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