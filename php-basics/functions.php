<?php
    declare(strict_types=1); // strict requirement
    function addNumbers(float $a=12.5, float $b) : float {
      return $a + $b;
    }
    echo addNumbers(1.2, 5.2)."<br>";
    echo addNumbers(12.5,12.5)."<br>";
?>

<?php
    function add_five(&$value) {
    $value += 5;
    }

    $num = 2;
    echo $num."<br>";
    add_five($num);
    echo $num."<br>";
?>