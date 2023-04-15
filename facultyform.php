<?php
include 'config.php';
include 'header.php';

if (isset($_POST['submit'])) {
$faculty_name = $_POST['facultyname'];
$departments = $_POST['departments'];


if (!empty($faculty_name) && !empty($departments)) {
 
    $sql = "INSERT INTO faculties (faculty_name,departments) VALUES ('$faculty_name', '$departments')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script>alert('Data Successfuly Entered!!')</script>";
   
    }else {
      echo "<script>alert('Woops! Something Wrong Went.')</script>";
    }
  }
} 



?>

<body>

<div class="row">
    <div class="col-lg-12 grid-margin">


<div class="card">
<div class="card-body">
    <a href="facultyview.php">
    <input type="button" value="Back" class="btn btn-danger pd-3">
    </a>

                    <h4 class="card-title mt-4">Add Faculty Details</h4>
                    <p class="card-description"> Fill Form To Add Details To Tables </p>
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Faculty Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="facultyname" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Faculty Departments</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Code" name ="departments" required >
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