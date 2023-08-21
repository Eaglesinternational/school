<?php

error_reporting(0);
session_start();
session_destroy();

include('db_connection.php');

if($_SESSION['message']){
  $message = $_SESSION['message'];
  echo "<script type='text/javascript'> alert('$message') </script>";
}

if($_SESSION['message1']){
  $message1 = $_SESSION['message1'];
  echo "<script type='text/javascript'> alert('$message1') </script>";
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
      body{
    /* margin: 0;
    padding: 0;
    font-family: sans-serif; */
   /*  background: #f5abc9; */
    
}
.image{
  border: non !important; 
  background:#f5abc9 !important;
}
    </style>
</head>
<body>
    
<!---------------------------navbar-------------------------------->
<nav class="navbar navbar-expand-lg bg-primary fixed-top text-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">I.M.S</a>
    <button class="navbar-toggler text-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        <a class="nav-link text-light" href="#">About Us</a>
        <a class="nav-link text-light" href="#">Contact Us</a>
        <a class="nav-link text-light">Gallery</a>
        <div class="anchor">
        <ul>
            <li><a href="login.php" class="btn btn-success d-none">Login</a></li>
        </ul>
      </div>
      </div>
    </div>
    <div class="anchor">
        <ul class="d-xxs-none">
            <li><a href="login.php" class="btn btn-success d-xs-none">Login</a></li>
        </ul>
      </div>
  </div>
</nav>
<!----------------------------------end of navbar------------------->

<!-------------------------------carousel-------------------------->
<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cross.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <p>My Childern.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/grad.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <p>The graduand.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/student.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <p>My Student.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!---------------------------------end of carousel----------------->

<!-----------------------welcome-------------------------->

<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <h1 class="mt-3">Welcome to Eagles </h1>
            <hr class="line mt-1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat optio delectus ex quia numquam, ut quis molestias facere sed tenetur officiis, excepturi iusto, tempora doloribus. Modi harum facilis provident quasi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, autem pariatur nemo tempore eveniet possimus inventore iste enim adipisci rerum eaque molestiae facilis numquam maxime tenetur minus cumque quia architecto!</p>
        </div>
        <div class="col-md-4">
         <div class="card image">
            <div class="card-body border-none image">
                <img src="img/cross.jpg" alt="" width="100%">
            </div>
         </div>
        </div>
    </div>
</div>
<!-------------------end of welcome---------------------->

<!--------------------------------------------teachers section----------------->
<div class="container">
    <h2 class="text-center">TEACHERS</h2>
<div class="row">
<div class="col-md-4">
         <div class="card image">
            <div class="card-body border-none">
                <img src="img/cross.jpg" alt="" width="100%">
                <p class="card-text text-center">Mr. Steve
                    <br>
                    Web Developer
                </p>
            </div>
         </div>
        </div>
        <div class="col-md-4">
         <div class="card image">
            <div class="card-body border-none">
                <img src="img/cross.jpg" alt="" width="100%">
                <p class="card-text text-center">Mr. Daniel
                    <br>
                    Web Developer
                </p>
            </div>
         </div>
        </div>
        <div class="col-md-4">
         <div class="card image">
            <div class="card-body border-none">
                <img src="img/cross.jpg" alt="" width="100%">
                <p class="card-text text-center">Mrs Love
                    <br>
                    Graphics Designer
                </p>
            </div>
         </div>
        </div>
</div>
</div>
<!----------------------------end of teachers----------------------------------->

<!-------------------------Information section---------------------------------->

<div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Admission Procedure
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Courses
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        News
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
      <div class="container">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cross.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <p>My Childern.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/grad.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <p>The graduand.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/student.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <p>My Student.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

    </div>
  </div>
</div>
        </div>
        <div class="col-md-4">
            <form action="data_check.php" method="POST">
                <div>
                    <h3 class="text-center mt-3">Admission Form </h3>
                </div>
                <div class="get p-2 m-2">
                   <!--  <label for="">Name</label> -->
                    <input type="text" class="form-control he" name="name" placeholder="Your name">
                </div>
                <div  class="get p-2 m-2">
                    <!-- <label for="">Email</label> -->
                    <input type="text" class="form-control he" name="email" placeholder="Your Email">
                    
                </div>
                <div  class="get p-2 m-2">
                    <!-- <label for="">Phone</label> -->
                    <input type="text" class="form-control he" name="phone" placeholder="Your Phone number">
                </div>
                <div  class="get p-2 m-2">
                    
                    <textarea name="message"  class="form-control center he" placeholder="Your Message" ></textarea>
                </div>
                <div>
                    <center>
                    <input type="submit" class="btn btn-primary mt-2 " value="Apply" name="submit">
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>

<!------------------------- End ofInformation section--------------------------->

<!-----------------------footer----------------------------------------->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-3">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.186259764659!2d2.422007937830445!3d6.381979836825292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102355733fbac6b7%3A0xeb214af7a63b496d!2sAidjedo%204%2C%20Cotonou!5e0!3m2!1sen!2sbj!4v1690743385980!5m2!1sen!2sbj" width="100%" height="450"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-4 follow">
                <p class="text-white">Follow us @</p>
                <a href="#">Facebook</a>
                <a href="#">Linkdin</a>
                <a href="#">Instagram</a>
            </div>
            <div class="col-md-4">yy</div>
        </div>
    </div>
</footer>



<!-----------------------footer----------------------------------------->








    <script src="js/bootstrap.min.js"></script>
</body>
</html>