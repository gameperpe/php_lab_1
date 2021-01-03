<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Example -->
<?php
// Example PHP Arithmetic Operators
$x = 10;  
$y = 6;

echo $x + $y;
echo "<br>";
// Example PHP Assignment Operators
$x = 10;  
echo $x;
echo "<br>";
// Example PHP Comparison Operators
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
echo "<br>";
// Example PHP Logical Operators
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo "<br>";
// Example PHP String Operators
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo "<br>";
// Example PHP Array Operators

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
echo "<br>";
// Example PHP Conditional Assignment Operators

   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>  
</body>
</html>