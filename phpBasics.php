<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php basics</title>
</head>

<body>
    <?php
    print_r($GLOBALS);
    $x = 5;
    echo "This is global scope: $x ";
    // here $x is in global scope that we can not access it inside of our function directly
    // like in javascript
    $x = 5; // global scope
    function myTest()
    {
        // about $x global variable can not be used here directly
        print_r($GLOBALS); // method of using global variable
        $GLOBALS['x'] = 15; // global variables goes to GLOBALS array so we access this way
        $GLOBALS['y'] = 5;
        echo "<p>Inside function is: " . $GLOBALS['x'] . "</p>";
    }
    $y = 10;
    myTest();
    echo "<p>Outside function is: " . $GLOBALS['x'] . "</p>"
        . $GLOBALS['y'];
    function Mytest1()
    {
        global $x;
        $x = 10;
        echo "Inside function $x ";
        echo 'Inside function $x ';
    }
    Mytest1();
    echo "Outside function $x ";
    print_r($GLOBALS);
    function increment($a, $b = 1)
    {
        $c = $a * $b;
        echo "$c <br>";
    }
    increment(2000, 2);
    increment(8000);
    class Car // class
    {
        // class stores, properties and methods

        // Properties
        public $color;
        public $model;


        // Constructor and we will pass here arguments
        public function __construct($color, $model)
        {

            $this->color = $color;
            $this->model = $model;
        }
        // Method , means function are basically method inside class
        public function message()
        {
            return "My car is a " . $this->color . "" . $this->model . "!";
        }
    }
    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar->message();
    ?>
</body>

</html>