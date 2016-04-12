<?php
/* Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); */

$mass = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($mass as $key => $valua) {
echo "$key <br>";
}
foreach ($mass as $key => $valua) {
echo "$valua <br>";
}
?>

