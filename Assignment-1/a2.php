<html>
<head>
    <title>new webpage</title>
</head>    
<body>
    <form method="POST">
    <label>Redirect to google websie</label>
    <button type="submit" name="submit">Go to google</button>
   </form>
   <?php 
   if(isset($_POST['submit']))
   {
    header("Location:https://google.com");
    }
   ?>
    </body>
</html>

