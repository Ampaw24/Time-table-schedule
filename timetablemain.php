<?php
include 'header.php';
include 'config.php'

?>

<body>
    <div class="row" style="padding: 20px;">
        <a href="timetableform.php">
        <div class="btn btn-primary">Back</div>
        </a>
    </div>
<div class="row">
<div class="col-lg-12 grid-margin">
<div class="card">
<div class="card-body">
   <h2 class="text-center"><?php echo strtoupper($_POST['school_name']);?></h2>
   <h4 class="text-center">School Of <?php echo $_POST['faculty']?></h4>
   <h4 class="text-center"><?php echo strtoupper($_POST['department'])."   DEPARTMENT"?></h4>
   <h5 class="text-center">CPS 3B-Time Table</h5>
            <div class="row">
           
            <div class="col-lg-12 grid-margin stretch-card">

            <div class="card mt-2">
                  <div class="card-body">
                   
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> Day </th>
                            <th>Lesson 1 [Duration]</th>
                            <th>Lesson 2 [Duration]</th>
                            <th>Lesson3 [Duration]</th>
                            <th>Lesson4 [Duration]</th>
                            <th>Lesson 5 [Duration]</th>
                        
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Monday</td>
                                <td>
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                      <!-- select staff -->
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                    <select name="course1" id="" class="form-control" style="color: white;">
                                        <?php
                                        $sql = 'SELECT room_name FROM rooms ';
                                        $query = mysqli_query($conn,$sql);

                                        while ($rows = mysqli_fetch_array($query)) {
                                          $room = $rows['room_name'];
                                          echo "<option value = '$room'>$room</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                      <!-- select staff -->
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                    <select name="course1" id="" class="form-control" style="color: white;">
                                        <?php
                                        $sql = 'SELECT room_name FROM rooms ';
                                        $query = mysqli_query($conn,$sql);

                                        while ($rows = mysqli_fetch_array($query)) {
                                          $room = $rows['room_name'];
                                          echo "<option value = '$room'>$room</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Tuesday</td>
                                <td>   <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>

                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                  <select name="room" id="" class="form-control" style="color: white;">
                                  <?php
                                  $sql = 'SELECT room_name FROM rooms';
                                  $query = mysqli_query($conn,$sql);
                                  while ($row = mysqli_fetch_array($query)) {
                                    $room = $row['room_name'];
                                    echo "<option value='$room'> $room</option>";
                                  }
                                  ?>
                                  </select>
                                </td>
                                <td>
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                      <!-- select staff -->
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                    <select name="course1" id="" class="form-control" style="color: white;">
                                        <?php
                                        $sql = 'SELECT room_name FROM rooms ';
                                        $query = mysqli_query($conn,$sql);

                                        while ($rows = mysqli_fetch_array($query)) {
                                          $room = $rows['room_name'];
                                          echo "<option value = '$room'>$room</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                      <!-- select staff -->
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                    <select name="course1" id="" class="form-control" style="color: white;">
                                        <?php
                                        $sql = 'SELECT room_name FROM rooms ';
                                        $query = mysqli_query($conn,$sql);

                                        while ($rows = mysqli_fetch_array($query)) {
                                          $room = $rows['room_name'];
                                          echo "<option value = '$room'>$room</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                      <!-- select staff -->
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                    <select name="course1" id="" class="form-control" style="color: white;">
                                        <?php
                                        $sql = 'SELECT room_name FROM rooms ';
                                        $query = mysqli_query($conn,$sql);

                                        while ($rows = mysqli_fetch_array($query)) {
                                          $room = $rows['room_name'];
                                          echo "<option value = '$room'>$room</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr> 
                            <tr>
                                <td>Wednesday</td>
                                <td>   <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>

                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                   <select name="room" id="" class="form-control" style="color: white;">
                                  <?php
                                  $sql = 'SELECT room_name FROM rooms';
                                  $query = mysqli_query($conn,$sql);
                                  while ($row = mysqli_fetch_array($query)) {
                                    $room = $row['room_name'];
                                    echo "<option value='$room'> $room</option>";
                                  }
                                  ?>
                                  </select>
                                </td>
                                <td>
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                      <!-- select staff -->
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                    <select name="course1" id="" class="form-control" style="color: white;">
                                        <?php
                                        $sql = 'SELECT room_name FROM rooms ';
                                        $query = mysqli_query($conn,$sql);

                                        while ($rows = mysqli_fetch_array($query)) {
                                          $room = $rows['room_name'];
                                          echo "<option value = '$room'>$room</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                      <!-- select staff -->
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                    <select name="course1" id="" class="form-control" style="color: white;">
                                        <?php
                                        $sql = 'SELECT room_name FROM rooms ';
                                        $query = mysqli_query($conn,$sql);

                                        while ($rows = mysqli_fetch_array($query)) {
                                          $room = $rows['room_name'];
                                          echo "<option value = '$room'>$room</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                      <!-- select staff -->
                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                    <select name="course1" id="" class="form-control" style="color: white;">
                                        <?php
                                        $sql = 'SELECT room_name FROM rooms ';
                                        $query = mysqli_query($conn,$sql);

                                        while ($rows = mysqli_fetch_array($query)) {
                                          $room = $rows['room_name'];
                                          echo "<option value = '$room'>$room</option>";
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr> 
                            <tr>
                                <td>Thursday</td>
                                <td>  
                                   <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>


                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                   <select name="room" id="" class="form-control" style="color: white;">
                                  <?php
                                  $sql = 'SELECT room_name FROM rooms';
                                  $query = mysqli_query($conn,$sql);
                                  while ($row = mysqli_fetch_array($query)) {
                                    $room = $row['room_name'];
                                    echo "<option value='$room'> $room</option>";
                                  }
                                  ?>
                                  </select>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>   <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="">Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>

                                    <select name="course1" id="" class="form-control">
                                        <?php
                                        if (strtoupper($_POST['faculty']) == 'APPLIED SCIENCE') {
                                        
                                        ?>
                                        <option value="">Food And Nutrition</option>
                                        <?php
                                        };
                                        if (strtoupper($_POST['faculty']) == 'ENGINEERING') {

                                        ?>
                                        <option value="" >Mechanical Engineering</option>
                                        <?php
                                        };
                                        ?>
                                    </select> <br>
                                   <!-- select Room -->
                                   <select name="room" id="" class="form-control" style="color: white;">
                                  <?php
                                  $sql = 'SELECT room_name FROM rooms';
                                  $query = mysqli_query($conn,$sql);
                                  while ($row = mysqli_fetch_array($query)) {
                                    $room = $row['room_name'];
                                    echo "<option value='$room'> $room</option>";
                                  }
                                  ?>
                                  </select>
                                        </td>
                            </tr>
                          

     </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              
                   
</div>      
</div>
</div>
</div>

</body>