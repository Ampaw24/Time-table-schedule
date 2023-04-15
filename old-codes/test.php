<?php
                         $sql = 'SELECT department_name FROM departments';
                         $query = mysqli_query($conn,$sql);
                         while ($rows = mysqli_fetch_array($query)) {
                          $dep_name = $rows['department_name'];
                          echo "<option value = '$dep_name'>$dep_name</option>";
                         }
                         
                         ?>