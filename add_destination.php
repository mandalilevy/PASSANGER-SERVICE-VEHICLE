<?php

$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `destination`  WHERE name='".$_POST['dest']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  
header("Location:destination.php?Empty=Destination already Registered into the system!!");
}
else{
$sql="INSERT INTO `destination`(`name`) VALUES('".$_POST['dest']."')";
if(mysqli_query($con, $sql)){
 header("Location:destination.php?Invalid=Destination Successfully Registered!!");
}
}

?>