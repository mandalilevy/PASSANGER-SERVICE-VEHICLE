
<?php
$con=mysqli_connect("127.0.0.1","root","","vehicle");
if (!$con) {
	echo "NOT CONNECTED TO SERVER";
}
$idn=$_POST['id'];
$nm=$_POST['name'];
$em=$_POST['email'];
$ph=$_POST['cont'];
$ps=$_POST['pas'];
$rank="Admin";
$sql = "INSERT INTO `admin`(`Admin_ID`, `Admin_Name`, `Admin_Email`, `Admin_TelNo`)  VALUES ('$idn', '$nm', '$em','$ph')";

if(mysqli_query($con, $sql)){
echo "Message Saved";
$query = "INSERT INTO `login`( `Login_User_name`, `Login_User_password`, `Login_rank`)  VALUES ('$em','$ps', '$rank')";
 
if(mysqli_query($con, $query)){
	header("Location:admin.php?Empty= Registration Successfull!! Login Here");
} 
}

else{
   header("Location:admin_reg.php?Invalid= Duplicate entry of ID Number");
} 

mysqli_close($con);
 ?>