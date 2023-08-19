<?php


session_start();


error_reporting(0);
include("db_connection.php");




if(isset($_POST['submit'])){
    $id=$_POST['studentId'];
    $name=$_POST['subject'];
    $test=$_POST['test'];
    $exam=$_POST['exam'];
    $total=$_POST['total'];
    $grade=$_POST['grade'];


    $sql ="INSERT INTO results (student_id, subject, test, exam, total, grade) VALUES ('$id', '$name', '$test', '$exam', '$total', '$grade' )";

    $result=mysqli_query($data, $sql);
        if($result){
            echo "<script type='text/javascript'> alert('success') </script>";
        } else {
            echo "<script type='text/javascript'> alert('error') </script>";
        }
}



?>

<?php 

include("adminheader.php");
?>

<style>
    form{
        width: 450px;
        margin: 0 auto;
        margin-top: 4rem;
    }
</style>

<div class="container">
    <form action="#" method="POST">
    <div>
    <label for="">Student_id</label>
    <input type="number" name="studentId" class="form-control" required>
    </div>
    <div>
    <label for="">Subject</label>
    <input type="text" name="subject" class="form-control" required>
    </div>
    <div>
    <label for="">test</label>
    <input type="number" name="test" class="form-control" required>
    </div>
    <div>
    <label for="">exam</label>
    <input type="number" name="exam" class="form-control" required>
    </div>
    <div>
    <label for="">total</label>
    <input type="number" name="total" class="form-control" required>
    </div>
    <div>
    <label for="">grade</label>
    <input type="text" name="grade" class="form-control" required>
    </div>
    <div>
        <input type="submit" value="submit" name="submit" class="btn btn-success mt-3">
    </div>
    </form>
    </div>
</body>
</html>