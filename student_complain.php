<?php 


include('db_connection.php');


if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $class = htmlspecialchars($_POST['class']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Create a prepared statement
    $sql = "INSERT INTO complain (name, class, email, message) VALUES ('$name', '$class', '$email', '$message')";

    $result = mysqli_query($data, $sql);

    if($result){
        header("location: studenthome.php");
    } else {
        echo "<script type='text/javascript'> alert('Failed to upload') </script>   ";
    }

}





?>
