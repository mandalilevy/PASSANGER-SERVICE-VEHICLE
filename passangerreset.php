<?php 


$con=mysqli_connect("127.0.0.1","root","","vehicle");
$idd="Customer";
$query ="SELECT * FROM `login` WHERE Login_User_name='".$_POST['email']."' and Login_rank='$idd'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)==False) {
	header("Location: passenger_resetpassword.php?Invalid=Invalid Username!");
}
else{
	$sqq="UPDATE `login` SET  `Login_User_password`='".$_POST['pas']."' WHERE `Login_User_name`='".$_POST['email']."'";
	if(mysqli_query($con, $sqq)){
	header("Location: index.php?Empty=Password Reset Successfully!!");
		}
	
}



 ?>