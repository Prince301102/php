<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<h2>User Registration Form</h2>
    <form method="POST" action="table.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>

        <input type="submit" value="Register" name="submit">
    </form>
<?php
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pwd'])){
        $uname=$_POST['username'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
    }
?>
</body>
</html>