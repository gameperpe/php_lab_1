<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>constants</h2>
<?php
// Example 1
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
// Example 2
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
echo "<br>";
// Example 3
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
  echo "<br>";


?>
</body>
</html>