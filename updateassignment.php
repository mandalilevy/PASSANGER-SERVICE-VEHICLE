<?php 


$con=mysqli_connect("127.0.0.1","root","","vehicle");

$query ="DELETE FROM `assign`  WHERE vehicle_regno='".$_POST['vehicle']."' ";
$result=mysqli_query($con,$query); 
  if ($con->query($query) === TRUE) {
	$sqq="UPDATE `assign` SET  `vehicle_regno`='".$_POST['vehicle']."' WHERE `driver_id`='".$_POST['did']."'";
	if(mysqli_query($con, $sqq)){
	header("Location: update_assingment.php?success=Assignment Updated Successfully!!");
		}
	else{
	header("Location: update_assingnment.php?Invalid=Invalid Driver ID!!");

		}

}


 ?>