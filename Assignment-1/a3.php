<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        enter no of elements:<input type="number" name="numb" required>
        <button type="submit">submit</button>
    </form>
    
    <?php 
        if(isset($_POST['numb'])){
            $q=$_POST["numb"];
            echo "<form method=\"post\">";
            for($i=0;$i<$q;$i++){
                echo "element:${i}<input name=\"arr[]\" required>";
                echo "<br>";
            }
            echo "<button>submit</button>";
            echo "</form>";
        }

        
    ?>
    <?php
    if(isset($_POST['arr'])) {
        $arr=$_POST["arr"];
        print_r($arr);
    }
    ?>
</body>
</html>