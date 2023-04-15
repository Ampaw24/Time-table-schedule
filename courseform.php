<?php
include 'config.php';
include 'header.php';

if (isset($_POST['submit'])) {
$staff_name = $_POST['staff_name'];
$staff_mail = $_POST['staff_mail'];
$faculty = $_POST['faculty'];


if (!empty($staff_name) && !empty($staff_mail)) {
 
    $sql = "INSERT INTO staff (staff_name,staff_mail,faculty) VALUES ('$staff_name', '$staff_mail', '$faculty')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script>alert('Data Successfuly Entered!!')</script>";
      header('location:staffview.php');
   
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
    <a href="staffview.php">
    <input type="button" value="Back" class="btn btn-danger pd-3">
    </a>

                    <h4 class="card-title mt-4">Add StaffDetails</h4>
                    <p class="card-description"> Fill Form To Add Details To Tables </p>
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Staff Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="staff_name" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail3">Staff Mail</label>
                        <input type="mail" class="form-control" id="exampleInputEmail3" placeholder="Code" name ="staff_mail" required >
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

                      
                
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                      <a href="staffview.php">
                      <button class="btn btn-dark" >Cancel</button>
                      </a>
             
                    </form>
                  </div>
                
                  </div>
                  </div>
</div>

</body>