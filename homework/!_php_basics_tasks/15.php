<?PHP
$a = 10;
$b = 10;
$operator = '+';
echo "Первая переменная: $a";
echo "<br>";
echo "Вторая переменная: $b";
echo "<br>";
echo  "Функция: $operator";
echo "<br>";
echo "Результат: ";
switch ($operator) {
    case $operator == '/' && $a == 0 || $b == 0:
        echo "на 0 делить нельзя";
        break;
    case $operator == '+':
        echo $a + $b;
        break;
    case $operator == '-':
        echo $a - $b;
        break;
    case $operator == '/':
        echo $a / $b;
        break;
    case $operator == '*':
        echo $a * $b;
        break;
    case $operator == '%':
        echo $a % $b;
        break;
    default:
        echo "Что-то не то!";
}
?>