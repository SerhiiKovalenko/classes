<?php
/* 24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза. */
function substr_count_search($number, $number_search) {
    $x += substr_count_search($number, $number_search);
    return $x;
}
$valua = substr_count($_POST['number'], $_POST['number_search']);
echo $valua;
?>

