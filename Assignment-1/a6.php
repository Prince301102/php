<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for="pg" >Select your choice</label>
        <select id="pg" name="ch">
            <option value="google">Google</option>
            <option value="yahoo">Yahoo</option>
            <option value="youtube">Youtube</option>
        </select>
        <input type="submit" name="submit">
        <?php
        if(isset($_GET['submit'])){
            $ch=$_GET['ch'];
            
            switch($ch){
                case "google":
                    header("Location:https://google.com");
                    break;
                
                case "yahoo":
                    header("Location:https://yahoo.com");
                    break;

                case "youtube":
                    header("Location:https://youtube.com");
                    break;
                }
            }
        ?>
</form>
</body>
</html>