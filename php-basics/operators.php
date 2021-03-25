<?php
    $x = 100;  
    $y = "100";
    //Returns true if $x is equal to $y, and they are of the same type
    echo var_dump($x === $y)."<br>"; // returns false because types are not equal
    //Spaceship operator
    $x=16;
    $y='15';
    echo($x<=>$y)."<br>";
    //-1 if x is smaller, 0 if both are equal and 1 if x is greater
?>  

<!-- Array Operations -->
<?php
    $x = array("a" => "reds", "b" => "green");  
    $y = array("a" => "red", "b" => "green");  

    echo var_dump($x === $y)."<br>"; // output is false
    $x = array("a" => "red", "b" => "green");  
    $y = array("a" => "red", "b" => "green");  

    echo var_dump($x === $y)."<br>"; // output is true
?>  

<!-- Null coalescing -->
<?php
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   $color="pink";
   echo $color = $color ?? "red";   
?>