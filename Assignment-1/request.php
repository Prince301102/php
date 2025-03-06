<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name'])) {
        echo "POST: Name is " . $_POST['name'] . "<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['name'])) {
        echo "GET: Name is " . $_GET['name'] . "<br>";
    }
}

if (isset($_REQUEST['name'])) {
    echo "REQUEST: Name is " . $_REQUEST['name'] . "<br>";
}
?>
