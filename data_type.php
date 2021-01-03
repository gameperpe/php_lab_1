<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- data type -->
<!-- Example data type -->
<h2>data type</h2>
<?php
// Example 1
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";
// Example 2
$x = 5985;
var_dump($x);
echo "<br>";
// Example 3
$x = 10.365;
var_dump($x);
echo "<br>";
// Example 4
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
// Example 5
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
// Example 6
$x = "Hello world!";
$x = null;
var_dump($x);
?>


</body>
</html>