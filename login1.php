<?php
 error_reporting(0);
 session_start();
 session_destroy();
?>


<?php

include('navbar.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-image: url("img/sch.jpeg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }
        .loginMessage{
            color: red;
        }
    </style>
</head>
<body >
    
        <div class="container d-flex justify-content-center align-items-center min-vh-100 col-md-12 right-box" >
            <div class="row align-items-center">
            <div class="row align-items-center">

                <div class=" col-sm-3 col-1 ">
                
            <div  class="form_deg">
                <center class="title_deg">Login Form
                    <h4 class="loginMessage">
                <?php
            
                echo $_SESSION['loginMessage'];
                
                ?>
                </h4>
                </center>
            <center>
                
                <form action="login_check.php" method="POST" class="form_login">
                    <div>
                        <label for="">Username</label>
                        <input type="text" class="formcontrol" name="username" value="<?php echo htmlspecialchars($name); ?>" >
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" class="formcontrol" name="password" value="<?php echo htmlspecialchars($pass); ?>">
                    </div>
                    <div>
                        
                        <input type="submit" class="btn btn-primary" name="submit" value="Login">
                        </div>
                        </form>
                        </center>
                    </div>
                    </div>
                
                </div>
                </div>
            </div>


<script src="js/bootstrap.min.js"></script>
</body>
</html>