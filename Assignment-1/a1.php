    <html>
    <head>
        <title>Star pattern</title>
    </head>    
    <body>
        <form method="POST">
        <input type="number" name="number">
        <button type="submit">submit</button>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $num=$_POST["number"];
            for($i=0;$i<$num;$i++){
                echo "<br>";
                for($j=0;$j<$i;$j++){
                    echo "*";
                }
            }
        }
        ?>
        </body>
    </html>
