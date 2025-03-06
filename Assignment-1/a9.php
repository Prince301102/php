<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplication table</title>
</head>
<body>
<form method="GET">
        Enter number to get multiplication table:<input type="number" name="num">
        <input type="submit" name="submit"> 
    </form>
    <?php
    if(isset($_GET['num'])){

        $num=$_GET['num'];
        for($i=1;$i<11;$i++){
            echo $num , '*' , $i , '=' , $num*$i;
            echo "<br>";
        }
    }

    ?>
</body>
</html>