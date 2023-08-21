<?php 



$host="localhost";
$user = "root";
$password = "";
$db = "try";

$data = mysqli_connect($host, $user, $password, $db);

if($data === false){
    die("Connection Error");
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create a prepared statement
    $sql = "INSERT INTO user (name, class, email, message) VALUES ('$name', '$class', '$email', '$message')";

    $result = mysqli_query($data, $sql);

    if($result){
        echo "success";
    } else {
        echo "failure";
    }

}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Complain Form</title>
</head>
<body>
    <form action="#" method="POST">
        <div>
            <label for="names">Name</label>
            <input type="text"  name="name" required>
        </div>
        <div>
            <label for="classs">Class</label>
            <input type="text"  name="class" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email"  name="email" required>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Message" required></textarea>
        </div>
        <div>
            <input type="submit" value="Submit" name="submit" class="btn btn-success">
        </div>
    </form>
</body>
</html>
