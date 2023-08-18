<!DOCTYPE html>
<html lang="en">
<head>
    <!-- your head content -->
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <?php
    session_start();
    $name = $_SESSION['username'];

    include("db_connection.php");

    if (!isset($_SESSION['username'])) {
        header("location:login.php");
        exit;
    } elseif ($_SESSION['usertype'] == 'admin') {
        header("location:login.php");
        exit;
    }

    // Fetch student's result
    $sql_result = "SELECT * FROM results WHERE student_id='$name'";
    $result_result = mysqli_query($data, $sql_result);

    if (!$result_result) {
        die("Error fetching result: " . mysqli_error($data));
    }

    // Fetch announcements
    $sql_announcements = "SELECT * FROM announcement ORDER BY announcement_date DESC";
    $result_announcements = mysqli_query($data, $sql_announcements);

    if (!$result_announcements) {
        die("Error fetching announcements: " . mysqli_error($data));
    }

    include("adminheader.php");
    ?>
<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Students Info</h4>
          </div>
        </div>
    <h1>Welcome, <?php echo $name; ?></h1>
    <h2>Your Results:</h2>
    <h1>Welcome, <?php echo $name; ?></h1>
    <a href="logout.php">Logout</a>

    <?php if (mysqli_num_rows($result_result) > 0) { ?>
        <h2>Your Results:</h2>
        
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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js1/bootstrap.min.js"></script>
        <script src="js1/jquery.dataTables.min.js"></script>
        <script src="js1/dataTables.bootstrap5.min.js"></script>

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
        <button id="generate-pdf">Download PDF</button>

    </tbody>
</table>
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
