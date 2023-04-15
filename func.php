
<?php
function datacounter($table){
	require'config.php';
	$result=mysqli_query($conn,"SELECT * FROM $table ORDER BY id");
	$count=mysqli_num_rows($result);
	echo $count;
} ?>
