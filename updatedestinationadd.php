<?php

$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `price`  WHERE start='".$_POST['from']."' AND end='".$_POST['to']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  $qr ="UPDATE `price` SET `price`='".$_POST['price']."' WHERE start='".$_POST['from']."' AND end='".$_POST['to']."'";   
  $jibu=mysqli_query($con,$qr); 
  if ($con->query($qr) === TRUE) {
header("Location: updatedestination.php?Invalid=Price Updated Successfull!!");
}
}
else{

  header("Location: updatedestination.php?Empty=Price Not Added for the Location!!");
}


?>