<?PHP
$age = "Serh";
if ($age >= 18 && $age <= 59 && is_int($age)) {
    echo "Вам еще работать и работать";
} elseif ($age > 59 && is_int($age)) {
    echo "Вам пора на пенсию";
} elseif ($age <= 17 && $age > 0 && is_int($age)) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}
?>