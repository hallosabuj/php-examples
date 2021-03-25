<?php
    $x = 1;

    while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
    }
?>

<?php
    $x = 1;

    do {
    echo "The number is: $x <br>";
    $x++;
    } while ($x <= 5);
?>

<?php
    for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
    }
?>

<?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
    echo "$value <br>";
    }
?>

<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val) {
    echo "$x = $val<br>";
    }
    echo 'Age of Peter is : '.$age['Peter'];
?>