<?php
    $x = 5985;
    echo var_dump(is_int($x))."<br>";//is_integer() is_long()

    $x = 59.85;
    echo var_dump(is_float($x))."<br>";//is_double()
    echo var_dump(is_finite(100))."<br>";
    echo var_dump(is_infinite(100))."<br>";
    //NaN value
    $x = acos(8);
    echo var_dump($x)."<br>";
    echo is_nan(var_dump($x))."<br>";
    //is_numeric()
    $x = 5985;
    echo 'x = 5985 : '.var_dump(is_numeric($x))."<br>";

    $x = "5985";
    echo 'x = "5985" : '.var_dump(is_numeric($x))."<br>";

    $x = "59.85" + 100;
    echo 'x = "59.85" + 100 : '.var_dump(is_numeric($x))."<br>";

    $x = "Hello";
    echo 'x = "Hello" : '.var_dump(is_numeric($x))."<br>";
?>