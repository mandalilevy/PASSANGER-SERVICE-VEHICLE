<?php 
$con=mysqli_connect("127.0.0.1","root","","vehicle");
if (!$con) {
  echo "NOT CONNECTED TO SERVER";
}
session_start();
if (isset($_POST['submit'])) 
{
if (empty($_POST['name']) || empty($_POST['pass']))
  {
  header("Location:index.php?Empty=please fill in the blanks");
  }
else
{
$rank="Customer";
$query ="SELECT  * FROM `login` WHERE Login_User_name='".$_POST['name']."' AND Login_User_password='".$_POST['pass']."' AND Login_rank='$rank'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  $_SESSION['passenger']=$_POST['name'];
  header("Location:dashboard.php");
}
else{
  header("Location:index.php?Invalid= Username and Password do not match");
}
}
}
else
{
  echo "NOT WORKING NOW";
}
 ?>
