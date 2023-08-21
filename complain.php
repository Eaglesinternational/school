

<?php

include('adminheader.php');

include('db_connection.php');

$sql = "SELECT * FROM complain";

$result = mysqli_query($data, $sql);


?>


<main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Complain</h4>
          </div>
        </div>

        
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
              </div>
              <div class="card-body">
                <h4 class="text-center text-success">Complain from Students</h4>
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Email</th>
                        <th>Message</th><!-- 
                        <th>Start date</th>
                        <th>Salary</th> -->
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                    
                    
                    while($info=$result->fetch_assoc()){

                   
                    
                    
                    ?>
                      <tr>
                        <td><?php echo "{$info['name']}"; ?></td>
                        <td><?php echo "{$info['class']}"; ?></td>
                        <td><?php echo "{$info['email']}"; ?></td>
                        <td><?php echo "{$info['message']}"; ?></td>
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