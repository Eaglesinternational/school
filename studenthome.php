
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- your head content -->
    <style>
        /* Your CSS styles here */
        *{margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .class h1{
            display: flex;
            gap: 2rem;
        }
        .logo{
            width: 70px;
            display: block;
        }
        form{
            width: 450px;
            /* background: #f2f2f2; */
            margin: 0 auto;
            margin-bottom: 2px;
            
        }
        .area{
            resize: none;
        }
        
    </style>
    <link rel="stylesheet" href="result.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>


    <?php

    session_start();
    $name = $_SESSION['username'];
     $class = $_SESSION['class'];
     $term = $_SESSION['term'];
     $session = $_SESSION['session'];
     $student_name = $_SESSION['name'];

    include("db_connection.php");

    if (!isset($_SESSION['username'])) {
        header("location:login.php");
        exit;
    } elseif ($_SESSION['usertype'] == 'admin') {
        header("location:login.php");
        exit;
    }

    // Fetch student's result
    $userId = $_SESSION['userid'];

    // Fetch student's results based on their user ID
    $sql_result = "SELECT * FROM results WHERE student_id='$userId'";
    $result_result = mysqli_query($data, $sql_result);

    // Fetch announcements
    $sql_announcements = "SELECT * FROM announcement ORDER BY announcement_date DESC";
    $result_announcements = mysqli_query($data, $sql_announcements);

    if (!$result_announcements) {
        die("Error fetching announcements: " . mysqli_error($data));
    }

    include("studentheader.php");
    ?>
<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
        <div>
<center>
<button onclick="download()" class="">Download</button>
</center>
</div>
          <!-- <div class="col-md-12">
            <h4>Students Info</h4>
          </div> -->
        </div>
        <div id="containe">
        <h1 class="text-center text-primary">INTERNATIONAL MODEL SCHOOL</h1>
      <center>  <small class="text-center text-success"></small> 
    </center>
    <div class="row">
        <div class="col md-4">
        <p >
        C/60 Guinkomey, enface ancient clinique du lac  <br>
        B.P 03-0988 TEL: +229 21 31 22 67 <br>
        Cotonou, Benin Republic
        </p>
        </div>
        <div class="col md-4">
            <center>
        <img src="img/logo.jpg" alt="" class="logo">
        </center>
        </div>

        <div class="col md-4">
        <p>
            Private co-educational Bilingual School <br>
            Email: Imscotonou@gmail.com <br>
            website: www.imscotonou.com
        </p>
        </div>
    </div>
    <!-- <h1>Welcome, <?php echo $name; ?></h1> -->
    <!-- <h2>Your Results:</h2> -->
    
    <h2 class="py-3"> Name: <?php echo  $student_name;   ?></h2>
    
     <h2>Class: <?php echo  $class ?></h2> 
     <h2>Class: <?php echo  $term ?></h2> 
     <h2>Class: <?php echo  $session ?></h2> 
    <!-- <a href="logout.php">Logout</a> -->

    <?php if (mysqli_num_rows($result_result) > 0) { ?>
        <!-- <h2>Your Results:</h2> -->
        

       
    <table id="results-table" class="table">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Test</th>
                <th>Exam</th>
                <th>Total</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row_result = mysqli_fetch_assoc($result_result)) {
                echo "<tr>";
                echo "<td>" . $row_result['subject'] . "</td>";
                echo "<td>" . $row_result['test'] . "</td>";
                echo "<td>" . $row_result['exam'] . "</td>";
                echo "<td>" . $row_result['total'] . "</td>";
                echo "<td>" . $row_result['grade'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        </table>


                <div class="row">
                    <div class="col md-8">
            <div class="remark mt-2">
                <div class="para">
                    <p>Total Credit Obtainable:</p>
                    <p>Total Credit Obtained:</p>
                    <p>Average score:</p>
                </div>
                <div class="para">
                    <p>Number of Subjects Passes:</p>
                    <p>Number of Subjects failed:</p>
                    <p>Remark:</p>
                </div>
                <div>
                    <h5>FORM TEACHER'S COMMENT:</h5>
                    <h5>PRINCIPAL'S COMMENT:</h5>
                </div>
                <div class="para">
                    <p>Signature:</p>
                    DATE: NEXT TERM BEGINS:
                </div>
                <div class="row">
                    <div class="col md-4">
                        A1 = 75% and above: EXCELLENT
                        B2 = 70% - 74%. VERY GOOD
                        B3 = 65% - 69%: GOOD
                        C4 = 60% - 64%: CREDIT
                        C5 = 55% - 59%: CREDIT
                        C6 = 50% - 54%: CREDIT
                        D7 = 45% - 49%: PASS
                        E8 = 40% - 44%: WEAKPASS
                        F = 0% - 39%: FAIL
                    </div>
                </div>
                <center>
                <p class="mt-3 text-primary">BRINGING THE WORLD TOGETHER FOR THE KNOWLEDGE TO EXCEL</p>
            </center>

            </div>
            </div>
            </div>
        </div>

    
<script type="text/javascript">
    function download(){

const pdf = document.getElementById("containe");

html2pdf().from(pdf).save();

}
</script>
       <!--  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js1/bootstrap.min.js"></script>
        <script src="js1/jquery.dataTables.min.js"></script>
        <script src="js1/dataTables.bootstrap5.min.js"></script> -->

        <script>
            $(document).ready(function() {
                $('#results-table').DataTable();
            });
        </script>
<!-- Your PHP code to fetch announcements here -->
<?php
// Assuming you already fetched announcements in $result_announcements
?>
<br>
<br>
<div class="row">
    <div class="col-md-6">
<table id="announcements-table" class="table">
    <thead>
        <tr>
            <th>Announcement Title</th>
            <th>Date</th>
            <th>Announcement Text</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row_announcement = mysqli_fetch_assoc($result_announcements)) { ?>
            <tr>
                <td><?php echo $row_announcement['announcement_title']; ?></td>
                <td><?php echo $row_announcement['announcement_date']; ?></td>
                <td><?php echo $row_announcement['announcement_text']; ?></td>
            </tr>
        <?php } ?>
       <!--  <button id="generate-pdf">Download PDF</button> -->

    </tbody>
</table>
</div>
<div class="col md-6">
    <h5 class="text-center"> Have any complains?</h5>
    <form action="student_complain.php" method="POST">
        
        <div>
            
            <input type="text" class="form-control m-3 " name="name" placeholder="Your Name" required>
        </div>
        <div>
          
            <input type="text" class="form-control m-3" name="class" placeholder="Your class" required >
        </div>
        <div>
            
            <input type="email" class="form-control m-3" name="email" placeholder="Your Email" required >
        </div>
      
        <div>
            
            <textarea name="message" class="form-control area m-3"  placeholder="Message" required></textarea>
        </div>
       
        <center>
        <div>
        <input type="submit" value="Submit" name="submit" class="btn btn-success m-2">
        </div>
        </center>
    </form>
</div>
</div>
    <?php } ?>


    <script>
    $(document).ready(function() {
        $('#generate-pdf').click(function() {
            // Create a new jsPDF instance
            var doc = new jsPDF();

            // Generate PDF for results
            if ($('#results-table').length) {
                doc.text("Your Results", 10, 10);
                doc.autoTable({ html: '#results-table' });
            }

            // Generate PDF for announcements
            if ($('#announcements-table').length) {
                doc.text("Announcements", 10, doc.lastAutoTable.finalY + 10);
                doc.autoTable({ html: '#announcements-table' });
            }

            // Save the PDF file
            doc.save('student_info.pdf');
        });
    });
</script>



    <!-- Add this before the closing body tag of your HTML file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>


    <?php  include("adminfooter.php"); ?>

</body>
</html>
