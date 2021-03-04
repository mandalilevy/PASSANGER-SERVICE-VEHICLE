<?php

$con=mysqli_connect("127.0.0.1","root","","vehicle");

  	$qq ="DELETE FROM `assign`  WHERE vehicle_regno='".$_POST['vehicle']."' ";
  	if ($con->query($qq) === TRUE) {
    header("Location: unassign.php?Empty=Vehicle Unassigned Successfull!!");
	    }



?>