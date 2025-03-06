<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        Enter number to find factorial:<input type="number" name="num">
        <input type="submit" name="submit"> 
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['submit']))
    {
        $fact=1;
        $num=$_GET['num'];
        if($num<0){
            echo "negative number cannot have factorial";
        }
        else{
            for($i=1;$i<=$num;$i++){
                $fact *= $i;
            }
            echo "Factorial is:", $fact;
        }
    }
    ?>

</body>
</html>