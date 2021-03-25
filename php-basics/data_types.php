<h1>Types of data types in PHP</h1>
<ul>
    <li>String</li>
    <li>Integer</li>
    <li>Float (floating point numbers - also called double)</li>
    <li>Boolean</li>
    <li>Array</li>
    <li>Object</li>
    <li>NULL</li>
    <li>Resource</li>
</ul>

<?php
    $x = 5985; //Integer
    echo var_dump($x)."<br>"; //Returns data type of a variable
    $x=12.5; //Float
    $bool=true; //Boolean
    $cars = array("Volvo","BMW","Toyota"); //Array
    echo var_dump($cars)."<br>";
    $x = null; //NULL
    echo var_dump($x)."<br>";
?>

<?php
    //PHP Object data type
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!<br>";
        }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar -> message();
?>

<?php
    class Student{
        public $name;
        public $roll;
        public $marks;
        public function __construct($name,$roll,$marks){
            $this->name=$name;
            $this->roll=$roll;
            $this->marks=$marks;
        }
        public function showDetails(){
            echo "Name  : ".$this->name."<br>";
            echo "Roll  : ".$this->roll."<br>";
            echo "Marks : ".$this->marks."<br>";
        }
    }
    //Creeting object of type Student
    $s1=new Student("Sabuj","23","400");
    $s1->showDetails();
?>