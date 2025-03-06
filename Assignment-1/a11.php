<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="request.php" method="POST">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit via POST">
</form>

<form action="request.php" method="GET">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit via GET">
</form>

</body>
</html>