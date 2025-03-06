<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
    Enter row:    <input type="number" name="row">
    Enter column:    <input type="number" name="col">
        <input type="submit" name="submit">
</form>
<?php
if(isset($_GET['row']) && isset($_GET['col']))
{
$r=$_GET['row'];
$c=$_GET['col'];
echo "<table border='1'>";
    for($i=0;$i<$r;$i++){
        echo "<tr>";
        for($j=0;$j<$c;$j++){
            echo "<td>";
            echo $i;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
    ?>
</body>
</html>