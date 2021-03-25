<?php
    echo "For different types of variable...<br>";
    $txt = "Hello world!<br>";
    $x = 5;
    $y = 10.5;
    echo $txt;
    echo ($x+$y)."<br>";
    $txt = "India<br>";
    echo "I love my $txt!";
?>
<!-- Variable scope -->
<?php
    $x = 5; // global scope
    $y =11;
    function myTest() {
        $y=10; //local variable
        global $x; //accessing global variable
        echo 'Global x='.$x.'<br>';
        echo "Local y = $y<br>";
        //Another way of accessing global variable 
        echo 'Global y='.$GLOBALS['y'];
    }
    myTest();
    echo "<p>Variable x outside function is: $x</p>";
    function checkStatic(){
        static $x=1;
        echo $x." number call to checkStatic<br>";
        $x++;
    }
    checkStatic();
    checkStatic();
    checkStatic();
?>