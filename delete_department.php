<?php
include 'config.php';
include 'header.php';

 $id = $_GET['id'];
 $sql = "DELETE FROM departments WHERE id=$id";
 $query = mysqli_query($conn,$sql);

if ($query == true) {
  echo "<script> alert('Department Successfully Deleted');</script>";
 
  header('location:departmentview.php');
}else {
    echo "<script> alert('Department Delete Failed');</script>";
    echo "<h2 class= 'alert alert-danger'>Delete Failed!!</h2>";
    header('location:departmentview.php');
    
}
?>