<?php 


$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `driver` WHERE driver_id='".$_POST['did']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
 header("Location: driver_management.php?Invalid=Driver Already Added!!");
}
else{
$sql="INSERT INTO `driver`(`driver_id`, `driver_name`, `driver_licenceno`, `driver_age`, `driver_gender`)  VALUES('".$_POST['did']."','".$_POST['dname']."','".$_POST['dlno']."','".$_POST['dage']."','".$_POST['dgender']."')";
if(mysqli_query($con, $sql)){
header("Location: driver_management.php?success=Driver Added Successfully!!");
}
}

 ?>