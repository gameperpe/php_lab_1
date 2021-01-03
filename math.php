<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>math</h2>
<?php
// Example 1
echo(pi()); // returns 3.1415926535898
echo "<br>";
// Example 2
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
echo "<br>";
// Example 3
echo(abs(-6.7));  // returns 6.7
echo "<br>";
// Example 4
echo(sqrt(64));  // returns 8
echo "<br>";
// Example 5
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
echo "<br>";
// Example 6
echo(rand());
echo "<br>";
// Example 7
echo(rand(10, 100));
?>
</body>
</html>