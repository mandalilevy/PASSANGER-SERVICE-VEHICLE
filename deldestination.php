<?php

$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="DELETE FROM `destination`  WHERE name='".$_POST['from']."' ";
$result=mysqli_query($con,$query); 
  if ($con->query($query) === TRUE) {
  	$qq ="DELETE FROM `price`  WHERE start='".$_POST['from']."' or end='".$_POST['from']."'";
  	if ($con->query($qq) === TRUE) {
    header("Location: delete_destination.php?Empty=Delete Successfull!!");
	    }
}


?>