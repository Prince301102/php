<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=0;$i<10;$i++){
        if($i==5){
            continue;
        }
        echo $i;
    }
    echo "<br>";
    for($i=0;$i<10;$i++){
        if($i==5){
            break;
        }
        echo $i;
    }
    ?>
</body>
</html>