
<?php

session_start();


error_reporting(0);
include('db_connection.php');

include('adminheader.php');

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

elseif($_SESSION['usertype']=='student'){
    header('location:login.php');
}



$id=$_GET['student_id'];

$sql ="SELECT * FROM user WHERE id = '$id' ";

$result = mysqli_query($data, $sql);

$info = $result->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $query = "UPDATE user SET username='$name' , email='$email', phone='$phone', password='$password' WHERE id='$id'   ";

    $result2 =mysqli_query($data, $query);

    if($result2){

        header("location:view_student.php");

       /*  echo "<script type=text/javascript> alert('Update Successful') </script>"; */

           }
}

?>


<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Update Student Data</h4>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
              </div>
              <div class="card-body">
                <h4 class="text-center text-success">Update Student Data</h4>
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%">
                  
                  <form action="#" method="POST">
                <div>
                    <h3 class="text-center mt-3">Add Student</h3>
                </div>
                <div class="get p-2 m-2">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="name" value="<?php echo  "{$info['username']}"; ?>">
                </div>
                <div  class="get p-2 m-2">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo  "{$info['email']}"; ?>">
                    
                </div>
                <div  class="get p-2 m-2">
                    <label for="">Phone</label>
                    <input type="phone" class="form-control" name="phone" value="<?php echo  "{$info['phone']}"; ?>">
                </div>
                <div  class="get p-2 m-2">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" value="<?php echo  "{$info['password']}"; ?>">
                </div>
                
                <div>
                    <center>
                    <input type="submit" class="btn btn-success mt-2 " value="Update" name="update">
                    </center>
                </div>
            </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>





<?php


include('adminfooter.php');

?>