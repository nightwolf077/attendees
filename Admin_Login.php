<?php
$db = mysqli_connect("localhost", "root", "");
if (!$db) {
    die("Database connection error: " . mysqli_connect_error());
}

mysqli_select_db($db, "attendees");

if (isset($_POST['name']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE Name='$name' AND Password='$password'";
    $result = mysqli_query($db, $sql);

    if (!$result) {
        die("Query execution error: " . mysqli_error($db));
    }

    if (mysqli_num_rows($result) > 0) {
        header("Location: table.php");
        exit();
    } else {
        echo "<script>alert('Wrong Password or Username');</script>";
        include 'log in admin .html';
    }

    mysqli_free_result($result);
} else {
    echo "<script>alert('Name and Password are required');</script>";
}

?>
