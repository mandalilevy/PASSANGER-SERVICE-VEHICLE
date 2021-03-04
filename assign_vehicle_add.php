<?php 

$con=mysqli_connect("127.0.0.1","root","","vehicle");
//$query ="SELECT * FROM `assign` WHERE vehicle_regno='".$_POST['vehicle']."'";
//$result=mysqli_query($con,$query);
//if (mysqli_fetch_assoc($result)) {
 //header("Location: assign_vehicle.php?Invalid=Vehicle Already Assigned!!");
//}
$qq ="SELECT * FROM `assign` WHERE driver_id='".$_POST['did']."'";
$rr=mysqli_query($con,$qq);
if (mysqli_fetch_assoc($rr)) {
 header("Location: assign_vehicle.php?Invalid=Driver Already Assigned!!");
}
else{
$sql="INSERT INTO `assign`(`driver_id`, `driver_name`, `vehicle_regno`)  VALUES('".$_POST['did']."','".$_POST['dname']."','".$_POST['vehicle']."')";
if(mysqli_query($con, $sql)){
header("Location: assign_vehicle.php?success=Driver Assigned Vehicle Successfully!!");

}
else{
	header("Location: assign_vehicle.php?Invalid=Vehicle Already Assigned!!");

}
}

 ?>