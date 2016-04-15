<?php
/*23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
    пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
    2, 3, т. е. 6. */
function sum ($sum = null) {
    if (is_int($sum) && $sum > 0) {
        $sum = array_sum(str_split($sum));
        return $sum;
    } else {
        return "Enter the correct data";
    }
}

$valua = sum((int)$_POST['number']);
echo $valua;

?>