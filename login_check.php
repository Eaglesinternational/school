<?php

error_reporting(0);

session_start();

include('db_connection.php');

if ($data === false){
    die("connection error ");
}

if (isset($_POST['submit'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    

    $sql = "select * from users where username='".$name."' AND password='".$pass."' ";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "student") {
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = "student";
        $_SESSION['userid'] = $row['id']; // Store the user ID
        $_SESSION['class'] = $row['class']; // Store the user ID
        $_SESSION['term'] = $row['term']; // Store the user ID
        $_SESSION['session'] = $row['session']; // Store the user ID
        $_SESSION['name'] = $row['student_name']; // Store the user ID
    
        header("Location: studenthome.php");
    }
    

        elseif ($row["usertype"]== "admin"){
            $_SESSION['username']=$name;

            $_SESSION['usertype']= "admin";
            
            header("Location:adminhome.php");
        }

        else {


            $message = " Username or password do not match";

            $_SESSION['loginMessage']=$message;

            header("location:login.php");
        }


}


?>