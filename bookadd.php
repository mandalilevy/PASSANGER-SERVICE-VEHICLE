<?php

$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `book`  WHERE seat='".$_POST['seat']."' and date='".$_POST['date']."' and vehicle='".$_POST['vhc']."'  and time='".$_POST['time']."' ";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  
header("Location:book.php?Empty=Sorry, The Seat Has Already Been Booked!Select Another Seat!");
}
else{
$sql="INSERT INTO `book`(`passenger_id`, `passenger_name`, `contacts`, `email_address`, `start`, `end`, `seat`, `date`, `vehicle`, `time`) VALUES('".$_POST['id']."','".$_POST['name']."','".$_POST['cont']."','".$_POST['email']."','".$_POST['frm']."','".$_POST['dst']."','".$_POST['seat']."','".$_POST['date']."','".$_POST['vhc']."','".$_POST['time']."')";
if(mysqli_query($con, $sql)){
 header("Location:book.php?Invalid=Booking Successfull!!");
}
}

?>