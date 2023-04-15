<?php
include 'config.php';
include 'header.php';

 $id = $_GET['id'];
 $sql = "DELETE FROM courses WHERE id=$id";
 $query = mysqli_query($conn,$sql);

if ($query == true) {
    
  echo "<script> alert('Course Successfully Deleted');</script>";
  header('location:staffview.php');

}else {
    echo "<script> alert('Course Delete Failed');</script>";
    echo "<h2 class= 'alert alert-danger'>Delete Failed!!</h2>";
    header('location:departmentview.php');
    
}
?>