<?php
include("db_connection.php");

if(isset($_POST['submit'])){
    $id=$_POST['studentId'];
    $name=$_POST['subject'];
    $test=$_POST['test'];
    $exam=$_POST['exam'];
    $total=$_POST['total'];
    $grade=$_POST['grade'];


    $sql ="INSERT INTO resulted (student_id, subject, test, exam, total, grade) VALUES ('$id', '$name', '$test', '$exam', '$total', '$grade' )";

    $result=mysqli_query($data, $sql);
        if($result){
            echo "success";
        } else {
            echo "error";
        }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
    <div>
    <label for="">Student_id</label>
    <input type="number" name="studentId">
    </div>
    <div>
    <label for="">Subject</label>
    <input type="text" name="subject">
    </div>
    <div>
    <label for="">test</label>
    <input type="number" name="test">
    </div>
    <div>
    <label for="">exam</label>
    <input type="number" name="exam">
    </div>
    <div>
    <label for="">total</label>
    <input type="number" name="total">
    </div>
    <div>
    <label for="">grade</label>
    <input type="text" name="grade">
    </div>
    <div>
        <input type="submit" value="submit" name="submit">
    </div>
    </form>
</body>
</html>