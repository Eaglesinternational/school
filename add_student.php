
<?php
 error_reporting(0); 
session_start();




if(!isset($_SESSION['username'])){
    header('location:login.php');
}
elseif($_SESSION['usertype']=='student'){
    header('location:login.php');
}

include('db_connection.php');

if(isset($_POST['add_student'])){
    $name= $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $usertype = "student";

    $check = "SELECT * FROM users WHERE username = '$name' ";

    $check_user = mysqli_query($data, $check);

    $row_count = mysqli_num_rows($check_user);

    if($row_count ==1){
        echo "<script type='text/javascript'> alert('username already exist!') </script>";
    }

    else{

    $sql = "INSERT INTO users (username, email, phone, usertype, password) VALUES ( '$name', '$email', '$phone', '$usertype', '$pass')";

    $result = mysqli_query($data, $sql);

    if($result){
        echo "<script type='text/javascript'> alert('success') </script>";
        header('location:adminhome.php');
    }
    else{
        echo "<script type='text/javascript'> alert('failure') </script>";
    }
    }
}

?>



<?php include('adminheader.php'); ?>
<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Add New Student</h4>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
              </div>
              <div class="card-body">
                <h4 class="text-center text-success">Add Student</h4>
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
                    <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($name); ?>">
                </div>
                <div  class="get p-2 m-2">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>">
                    
                </div>
                <div  class="get p-2 m-2">
                    <label for="">Phone</label>
                    <input type="phone" class="form-control" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                </div>
                <div  class="get p-2 m-2">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" value="<?php echo htmlspecialchars($password); ?>">
                </div>
                
                <div>
                    <center>
                    <input type="submit" class="btn btn-primary mt-2 " value="Add Student" name="add_student">
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