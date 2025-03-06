<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <form method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="pwd">Password:</label><br>
        <input type="password" id="pwd" name="pwd"><br><br>

        <label for="cpwd">Confirm Password:</label><br>
        <input type="password" id="cpwd" name="cpwd"><br><br>

        <input type="submit" value="Register" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];

        if (empty($username)) {
            echo "Username is required.<br>";
        } elseif (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $username)) {
            echo "Username must be between 5 to 15 characters and alphanumeric.<br>";
        }

        if (empty($email)) {
            echo "Email is required.<br>";
        } elseif (!preg_match("/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email)) {
            echo "Invalid email format.<br>";
        }

        if (empty($pwd)) {
            echo "Password is required.<br>";
        } elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/", $pwd)) {
            echo "Password must be at least 6 characters and contain at least one letter and one number.<br>";
        }
        
        if (empty($cpwd)) {
            echo "Confirm password is required.<br>";
        } elseif ($pwd !== $cpwd) {
            echo "Passwords do not match.<br>";
        }

        if (!empty($username) && !empty($email) && !empty($pwd) && !empty($cpwd) && $pwd === $cpwd) {
            echo "Registration successful!<br>";
        }
    }
    ?>

</body>
</html>
