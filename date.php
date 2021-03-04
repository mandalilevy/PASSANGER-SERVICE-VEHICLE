<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PASSENGER SERVICE VEHICLE MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
<body>
	
<div class="container pt-xl-5">
<div class="container jumbotron">
	<div class="container">
    <center>
<form action="" method="post">
  <div class="form-group row">
                                    
                                    <input type="date" class="form-control col-sm-5" name="name"  required="">
                                    
                                    <input type="submit" name="add" class="btn btn-success" value="Select Date">
                                </div>
</form>
</center>
</div>
</div>
</div>
<style>
  .group{
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, .1)
  }
</style>
<?php 
session_start();
if (isset($_SESSION['passenger'])) {
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `book` WHERE date='".$_POST['name']."' and passenger_id='".$_SESSION['passenger']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
 $_SESSION['date']=$_POST['name'];
  header("Location:cancel_book.php"); 
}
else{
?>
<html>
  <header>
    <title>PASSENGER SERVICE VEHICLE MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="bootstrap.css">
     <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
  </header>
  <body>
    <div class="container">
      <div class="jumbotron">
       <b style="color: red">Record Does Not Exist!!</b> <br>No Such Booking was made!!
      </div>
    </div>
  </body>
</html>

<?php }
}}
 ?>

</body>
</html>