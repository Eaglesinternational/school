<?php
session_start();
include('db_connection.php');

if($_GET['student_id']){
    $user_id = $_GET['student_id'];

    $sql = "DELETE FROM users WHERE id='$user_id' ";

    $result = mysqli_query($data, $sql);

    if($result){

        $_SESSION['message']= "Delete is successful";
        header('location:view_student.php');
        echo "<script type='text/javascript'> alert('Delete successful') </script>";
        
    }
    else{
        echo "<script type='text/javascript'> alert('Error') </script>";
    }
}


?>