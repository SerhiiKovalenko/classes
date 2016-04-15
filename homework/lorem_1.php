<?php
//$n = 2; // заданое значение от и до
//$z = 2; // заданое значение
//$i = 2*$n+1; // нижняя часть дроби

$z = 1; //sin z

for ($n = 1; $n <= 3; $n++) {
        $i = 2*$n+1;
        echo "-1 в степени n" .$n. " * " .$z. " в степени " .$i. " / " .$i. " = " .(pow(-1,$n)*pow($z,$i)/$i). "<br>";
        $res += pow(-1,$n)*pow($z,$i)/$i;
        $res1 = $z + $res;
    }

echo "Stop <br>";
echo $res;
echo "Stop2 <br>";
echo $res1;

//$res1 = $z + pow(-1,$n) * (pow($z,$i) / $i);
//echo $res1;
