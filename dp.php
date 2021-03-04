<?php

$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `price`  WHERE start='".$_POST['from']."' AND end='".$_POST['to']."'";
$result=mysqli_query($con,$query);
	if(mysqli_fetch_assoc($result)){
			  header("Location: price.php?Empty=Price Already Added!!");

	}
	else{
	$sql="INSERT INTO `price`(`start`, `end`, `price`) VALUES('".$_POST['from']."','".$_POST['to']."','".$_POST['price']."')";
		if(mysqli_query($con, $sql)){
		  header("Location: price.php?Invalid=Price Successfully Added!!");
	}
	}


?>