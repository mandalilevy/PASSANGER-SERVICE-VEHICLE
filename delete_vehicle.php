<?php

$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="DELETE FROM `vehicle`  WHERE vehicle_regno='".$_POST['from']."' ";
$result=mysqli_query($con,$query); 
  if ($con->query($query) === TRUE) {
  	$qq ="DELETE FROM `assign`  WHERE vehicle_regno='".$_POST['from']."' ";
  	if ($con->query($qq) === TRUE) {
    header("Location: del_vehicle.php?Empty=Delete Successfull!!");
	    }
}


?>