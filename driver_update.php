<?php 


$con=mysqli_connect("127.0.0.1","root","","vehicle");

 header("Location: update_driver.php?Invalid=Invalid Driver ID!!");
$sql="UPDATE `driver` SET `driver_name`='".$_POST['dname']."',`driver_licenceno` ='".$_POST['dlno']."',`driver_age`='".$_POST['dage']."',`driver_gender`='".$_POST['dgender']."' WHERE `driver_id`='".$_POST['did']."'";
if(mysqli_query($con, $sql)){
	$sqq="UPDATE `assign` SET `driver_name`='".$_POST['dname']."' WHERE `driver_id`='".$_POST['did']."'";
	if(mysqli_query($con, $sqq)){
	header("Location: update_driver.php?success=Driver Updated Successfully!!");
		}
	else{
	header("Location: update_driver.php?Invalid=Invalid Driver ID!!");

		}
}



 ?>