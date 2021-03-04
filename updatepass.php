<?php 

session_start();
$con=mysqli_connect("127.0.0.1","root","","vehicle");

 //header("Location: update_driver.php?Invalid=Invalid Driver ID!!");
$sql="UPDATE `customer` SET `customer_name`='".$_POST['dname']."',`customer_telno` ='".$_POST['dlno']."',`customer_email`='".$_POST['dage']."' WHERE `customer_id`='".$_SESSION['passenger']."'";
if(mysqli_query($con, $sql)){
	$sqq="UPDATE `book` SET `passenger_name`='".$_POST['dname']."',`contacts`='".$_POST['dlno']."',`email_address`='".$_POST['dage']."' WHERE `passenger_id`='".$_SESSION['passenger']."'";
	if(mysqli_query($con, $sqq)){
	header("Location: passenger_update.php?success= Updated Successfully!!");
		}
	else{
	header("Location: passenger_update.php?Invalid=Error Retry Again!!");

		}
}



 ?>