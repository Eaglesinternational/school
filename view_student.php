

<?php
error_reporting(0);
session_start();
include('adminheader.php');

include('db_connection.php');

$sql = "SELECT * FROM users WHERE usertype='student'";

$result = mysqli_query($data, $sql);


?>


<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Students Info</h4>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
              </div>
              <div class="card-body">
                <h4 class="text-center text-success">Student Data</h4>
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                  <?php
                  
                  if($_SESSION['message']){

                    $message3 = $_SESSION['message'];
                     echo "<script type='text/javascript'> alert($_message3) </script>";

                  }
                  unset($_SESSION['message']);
                  
                  ?>
                    <thead>
                      <tr>
                        <th>Student_Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Update</th>
                        <th>Delete</th>
                        
                        <!-- 
                        <th>Start date</th>
                        <th>Salary</th> -->
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                    
                    
                    while($info=$result->fetch_assoc()){

                   
                    
                    
                    ?>
                      <tr>
                        <td><?php echo "{$info['id']}"; ?></td>
                        <td><?php echo "{$info['username']}"; ?></td>
                        <td><?php echo "{$info['email']}"; ?></td>
                        <td><?php echo "{$info['phone']}"; ?></td>
                        <td><?php echo "{$info['password']}"; ?></td>
                        <td> <?php echo "<a  href='update_student.php?student_id={$info['id']}' class='btn btn-primary'>" ?>Update</a></td>
                        <td> <?php echo "<a onClick=\"javascript:return confirm('Are you sure to delete?');\" href='delete.php?student_id={$info['id']}' class='btn btn-danger'>" ?>Delete</a></td>
                        <!-- <td>2011/04/25</td>
                        <td>$320,800</td> -->
                      </tr>
                        
                      <?php
                      
                    }
                      
                      ?>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php

include('adminfooter.php');


?>