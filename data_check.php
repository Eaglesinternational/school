<?php
session_start();
include('db_connection.php');


$name = $email = $phone = $message = '';
$errors = array('name'=>'', 'email'=> '', 'phone'=>'', 'message'=>'');



if(isset($_POST['submit'])){
    
    // check email
    if(empty($_POST['email'])){
        $errors['email'] =  'An email is required  <br />';
        echo "Invalid email";
    } else {
       $email = $_POST['email'];
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $errors['email'] = 'email must be a valid email address';
       }
   
    }
        
    //check name
    if(empty($_POST['name'])){
        $errors['name'] = 'A name is required  <br />';
    } else {
       $name = $_POST['name'];
       if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
        $errors['name'] = 'Names must be letters and spaces only';
       }

}
  // check message
if(empty($_POST['message'])){
    $errors['message']=  'A message is required  <br />';
} else {
    $message = $_POST['message'];
    if(!preg_match('/^([a-zA-Z\s]+)(, \s*[a-zA-Z\s]*)*$/', $message)){
     $errors['message']= 'Message must be a comma separated list';
    }
}
}
  // check phone
if(empty($_POST['phone'])){
    $errors['phone']=  'A phone number is required  <br />';
} else {
    $phone = $_POST['phone'];
    if(!preg_match('/^([a-zA-Z\s]+)(, \s*[a-zA-Z\s]*)*$/', $message)){
     $errors['phone']= 'A phone unber is required';
    }
}

if(array_filter($errors)){
    /* echo "There are errors in the form"; */
    $_SESSION['message1'] = "There are errors in the form";
      header('location:index.php');

} else {
    $email = mysqli_real_escape_string($data, $_POST['email']);
    
    $name = mysqli_real_escape_string($data, $_POST['name']);
    
    $phone = mysqli_real_escape_string($data, $_POST['phone']);

    $message = mysqli_real_escape_string($data, $_POST['message']);

    $sql = "INSERT INTO admission(name, email, phone, message) VALUES('$name', '$email', '$phone', '$message')";
  
    if(mysqli_query($data, $sql)){

        header('Location: index.php');
    } else {
         echo 'query error: ' . mysqli_error($data); 
       
    }  
    // echo "form is valid";
 
   /*  $result = mysqli_query($data, $sql);

    if($result){
      $_SESSION['message'] = "Your application submitted successfully";
      header('location:index.php');
    
    } */
    }





?>