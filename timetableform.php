<?php
include 'config.php';
include 'header.php';



?>

<body>

<div class="row">
    <div class="col-lg-12 grid-margin">


<div class="card">
<div class="card-body">
    <a href="departmentview.php">
    <input type="button" value="Back" class="btn btn-danger pd-3">
    </a>

                    <h4 class="card-title mt-4">Add Title Of TimeTable</h4>
                    <p class="card-description"> Fill Form To Add Details </p>
                    <form class="forms-sample" method="POST"  action="timetablemain.php">
                      <div class="form-group">
                        <label for="exampleInputName1">Instituition Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="school_name" required>
                      </div>

                    <!-- change to select function -->
                      <div class="form-group">
                        <label for="exampleSelectGender">Faculty</label>
                        <select class="form-control" id="exampleSelectGender" name="faculty">
                         <?php
                         $sql = 'SELECT faculty_name FROM faculties';
                         $query = mysqli_query($conn,$sql);
                         while ($rows = mysqli_fetch_array($query)) {
                          $fac_name = $rows['faculty_name'];
                          echo "<option value = '$fac_name'>$fac_name</option>";
                         }
                         
                         ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Department</label>
                        <select class="form-control" id="exampleSelectGender" name="department">
                        <?php
                       
                        $sql = 'SELECT department_name FROM departments';
                         $query = mysqli_query($conn,$sql);
                         while ($rows = mysqli_fetch_array($query)) {
                          $dep_name = $rows['department_name'];
                          echo "<option value = '$dep_name'>$dep_name</option>";
                         }
                       
                         
                         
                         ?>


                        </select>
                      </div>

                      
                
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                      <a href="departmentview.php">
                      <button class="btn btn-dark" >Cancel</button>
                      </a>
             
                    </form>
                  </div>
                
                  </div>
                  </div>
</div>

</body>