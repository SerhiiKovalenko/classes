<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
        <title></title>
    </head>
<body>

<?php
/*23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
    пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
    2, 3, т. е. 6. */
function sum ($sum = null) {
    if (is_int($sum)) {
        $sum = array_sum(str_split($sum));
        return $sum;
    } else {
        return "Enter the correct data";
    }
}
$valua = sum(123);
echo $valua;

?>
<!-- А теперь форма с отдельно подключенным скриптом-->

    <form action="23_01.php" method="post">
        <p>
            <label for="number">Your number:</label>
            <input id="number" type="text" placeholder="Enter the number" name="number"/>
            <input type=submit value="Sum" />
        </p>
    </form>
</body>
</html>

