<?php

$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="DELETE FROM `driver`  WHERE driver_name='".$_POST['from']."' ";
$result=mysqli_query($con,$query); 
  if ($con->query($query) === TRUE) {
  	$qq ="DELETE FROM `assign`  WHERE driver_name='".$_POST['from']."' ";
  	if ($con->query($qq) === TRUE) {
    header("Location: del_driver.php?Empty=Delete Successfull!!");
	    }
}


?>