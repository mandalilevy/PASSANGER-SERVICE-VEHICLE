<?php 

$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `vehicle` WHERE vehicle_regno='".$_POST['vreg']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
    header("Location: vehicle_management.php?Invalid=Vehicle Already Added!!");
}
else{
$sql="INSERT INTO `vehicle`(`vehicle_type`, `vehicle_color`, `vehicle_regno`) VALUES('".$_POST['vtype']."','".$_POST['vcolor']."','".$_POST['vreg']."')";
if(mysqli_query($con, $sql)){
    header("Location: vehicle_management.php?success=Vehicle Added Successfull!!");

}
}
 ?>