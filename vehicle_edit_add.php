<?php 


$con=mysqli_connect("127.0.0.1","root","","vehicle");
$sqq="UPDATE `vehicle` SET `vehicle_regno`='".$_POST['vreg']."', `vehicle_color`='".$_POST['vcolor']."' WHERE `vehicle_regno`='".$_POST['vehicle']."'";
	if(mysqli_query($con, $sqq)){
	//header("Location: update_assingment.php?success=Assignment Updated Successfully!!");
		$query="UPDATE `assign` SET `vehicle_regno`='".$_POST['vreg']."' WHERE `vehicle_regno`='".$_POST['vehicle']."'";
		if(mysqli_query($con, $query)){
			header("Location: update_vehicle.php?Empty=Vehicle Updated Successfully!!");
		}
	else{
	header("Location: update_vehicle.php?Invalid=Invalid Vehicle Reg Number!!");

		}

}


 ?>