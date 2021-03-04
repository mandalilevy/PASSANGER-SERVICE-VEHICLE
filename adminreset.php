<?php 


$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `login` WHERE Login_User_name='".$_POST['email']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)==False) {
	header("Location: admin_reset.php?Invalid=Invalid Username!");
}
else{
	$sqq="UPDATE `login` SET  `Login_User_password`='".$_POST['pas']."' WHERE `Login_User_name`='".$_POST['email']."'";
	if(mysqli_query($con, $sqq)){
	header("Location: admin.php?Empty=Password Reset Successfully!!");
		}
	
}



 ?>