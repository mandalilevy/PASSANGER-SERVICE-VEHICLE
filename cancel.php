<?php 
$con=mysqli_connect("127.0.0.1","root","","vehicle");
if (!$con) {
  echo "NOT CONNECTED TO SERVER";
}
session_start();
$query ="DELETE FROM `book` WHERE `date`='".$_POST['id']."' AND passenger_id='".$_SESSION['passenger']."'";
//$result=mysqli_query($con,$query);
if (mysqli_query($con, $query)) {
  //header("Location:dashboard.php");
  header("Location:cancel_book.php?Empty= Booking Successfully Cancelled!");

}
else{
  header("Location:cancel_book.php?Empty= Booking Successfully Cancelled!");
}

 ?>
