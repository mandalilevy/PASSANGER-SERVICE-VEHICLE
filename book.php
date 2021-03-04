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

  <link rel = "icon" href = "img/b1.jpg" type = "image/x-icon"> 
  
</head>
<body  class="bg-light">
   <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 ml-auto-auto">
    <li class="nav-item">
          <?php 
  session_start();
if (isset($_SESSION['passenger'])) {
                  echo '<a style="color: white; font-family:Verdana; font-weight:bolder;" class="nav-link">PASSANGER ID: '.$_SESSION['passenger'].'</a>';
                    }


 ?>
      </li>





</ul >

<ul class="navbar-nav  mt-lg-0 ml-auto-auto">
 
</ul>
 <ul class="navbar-nav  mt-lg-0 mx-auto">
    
    
       
 </ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
   <li class="nav-item">
         <li class="nav-item">
     <a href="dashboard.php" style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" ><i class="fa fa-home fa-2x"></i></a>
      </li>
 
   
      </li>
 </ul>
 </div> 
 </nav>
<div class="container">
<div class="row">
      <div class="col-sm-9 col-md-5 col-lg-10 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body" >
              <h5 class="card-title text-center" style="color: blue; font-weight: bolder;">BOOK A SEAT</h5>


 <?php 
                 if (@$_GET['Empty']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-danger text-center text-uppercase"><?php echo $_GET['Empty']?></div>
                   <?php 
                 }
               ?>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div   class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>
<form action="bookadd.php" method="post">
  <div class="form-row">
     <div class="form-group col-md-6">
                                <label for="username" class="text-info">ID Number:</label><br>
                                
                                <?php 
                                 //  session_start();
                                $con=mysqli_connect("127.0.0.1","root","","vehicle");
        $ww = "SELECT * FROM  `customer` WHERE `customer_id`='".$_SESSION['passenger']."'";
                                $query_run=mysqli_query($con,$ww);
                                while($row=mysqli_fetch_array($query_run)) {?>
                               
                             <input type="text" value="<?php echo $row['customer_id'];?>" required="" name="id" class="form-control" readonly="readonly">
                                  </div>
     <div class="form-group col-md-6">
                                    <label for="username" class="text-info">Name:</label><br>
                              <input type="text" value="<?php echo $row['customer_name'];?>" required="" name="name" class="form-control" readonly="readonly">
                                  </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
                                    <label for="username" class="text-info">Phone Number:</label><br>
                              <input type="text" value="<?php echo $row['customer_telno'];?>" required="" name="cont" class="form-control" readonly="readonly">
                                  </div>
      <div class="form-group col-md-6">
                                    <label for="username" class="text-info">Email Address:</label><br>
    <input type="text" value="<?php echo $row['customer_email'];?>" required="" name="email" class="form-control" readonly="readonly">
                                  </div>
                              <?php } ?>
  </div>

 <div class="form-row">
      <div class="form-group col-md-6">
                                <label for="username" class="text-info">From:</label><br>
                                <select required="" class="form-control"  name="frm" id="">
                               <option>Select Your Starting Point</option>
                                <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query = "SELECT * FROM destination";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>
                                <option><?php echo $row['name'];?></option>

                                
                              <?php } ?>


                              </select>
                            </div>
      <div class="form-group col-md-6">
                                <label for="username" class="text-info">To:</label><br>
                                <select required="" class="form-control "  name="dst" id="">
                                  <option>Select Your Destination</option>
                                <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query = "SELECT * FROM destination";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>
                                <option><?php echo $row['name'];?></option>

                                
                              <?php } ?>


                              </select>
                            </div>
  </div>

 <div class="form-row">
        <div class="form-group col-md-6">
                                    <label for="username" class="text-info">Seat Number (1 - 56):</label><br>
                              <input type="number" value="" required="" name="seat" min="1" max="56" class="form-control">
                                  </div>
      <div class="form-group col-md-6">
                         <label for="username" class="text-info">Date of Travel:</label><br>
                                <input required="" type="date" name="date" class="form-control" >
                            </div>
  </div>

  <div class="form-row">
   <div class="form-group col-md-6">
                                <label for="username" class="text-info">Select Vehicle</label><br>
                                <select required="" class="form-control "  name="vhc" id="">
                                <option>Select Vehicle</option>
                                <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query = "SELECT * FROM vehicle";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>
                                <option><?php echo $row['vehicle_regno'];?></option>

                                
                              <?php } ?>


                              </select>
                            </div>
  
     <div class="form-group col-md-6">
                      <label for="username" class="text-info">Time:</label><br>
                                <select required="" class="form-control"  name="time" id="">
                               <option>Select Your Time</option>
                               <option>8:00 AM</option>
                               <option>2:00 PM</option>
         

                              </select>
                            </div>
  </div>
  <div class="form-row">
     <button type="submit" class="btn btn-lg btn-primary">Book</button>
  </div>
 
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>

<?php

?>


</html>
