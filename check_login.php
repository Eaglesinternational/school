<?php
session_start();

include("db_connection.php");

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$name' AND password='$pass'";
    $result = mysqli_query($data, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row['id'];
        $_SESSION['usertype'] = $row['usertype'];

        if ($row["usertype"] == "student") {
            header("Location: studenthome.php");
        } elseif ($row["usertype"] == "admin") {
            header("Location: adminhome.php");
        }
    } else {
        $message = "Username or password do not match";
        $_SESSION['loginMessage'] = $message;
        header("location:login.php");
    }
}
?>
