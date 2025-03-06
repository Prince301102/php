<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable

    </title>
</head>
<body>
<?php

$num = 23;

echo "Using gettype():\n";
echo "<br>";
echo "The type of the variable is: " . gettype($num) . "\n";
echo "<br>";
echo "The value of the variable is: " . $num . "\n";

echo "\nUsing var_dump():\n";
var_dump($num);
?>

    
</body>
</html>