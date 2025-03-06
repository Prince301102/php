<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
    <h3>Enter Values for Array Elements</h3>

    <form method="POST">
        <label>Element 1:</label><input type="text" name="elements[]"><br>
        <label>Element 2:</label><input type="text" name="elements[]"><br>
        <label>Element 3:</label><input type="text" name="elements[]"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['elements'])) {
        $elements = $_POST['elements']; 
        echo "Array Elements:";
        foreach ($elements as $element) {
            echo $element; 
        echo "\n";
         }
    }
    ?>

</body>
</html>
