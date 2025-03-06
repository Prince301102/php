<?php
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pwd'])){
        $uname=$_POST['username'];
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];

        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Username</th>";
        echo "<th>Email</th>";
        echo "<th>Password</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo $uname;
        echo "</td>";
        echo "<td>";
        echo $email;
        echo "</td>";
        echo "<td>";
        echo $pwd;
        echo "</td>";
        echo "</tr>";
        echo "</table>";

    }
?>