
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
$rank="Customer";
$sql = "INSERT INTO `customer`(`customer_id`, `customer_name`, `customer_telno`, `customer_email`)  VALUES ('$idn', '$nm','$ph','$em')";

if(mysqli_query($con, $sql)){
echo "Message Saved";
$query = "INSERT INTO `login`( `Login_User_name`, `Login_User_password`, `Login_rank`)  VALUES ('$idn','$ps', '$rank')";
 
if(mysqli_query($con, $query)){
	header("Location:index.php?Empty= Registration Successfull!! Login Here");
} 
}

else{
   header("Location:passenger_login.php?Invalid= Duplicate entry of ID Number");
} 

mysqli_close($con);
 ?>