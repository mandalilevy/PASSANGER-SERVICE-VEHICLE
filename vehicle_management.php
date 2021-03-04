<!DOCTYPE html>
<html lang="en">
<head>
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
<body class="bg-light">
   <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 ml-auto-auto">
  
</ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
   
    
    <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: ;" class="nav-link" href="update_vehicle.php">Edit Vehicle</a>
      </li>
      <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: ;" class="nav-link" >|</a>
      </li>
      
  
    
      
      <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: ;" class="nav-link" href="del_vehicle.php">Delete Vehicle</a>
      </li>
     <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight:;" class="nav-link" >|</a>
      </li>
        <li class="nav-item">
     <a href="admin_homepage.php" style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" ><i class="fa fa-home fa-2x"></i></a>
      </li>
     
 </ul>
 </div> 
 </nav>
 <div  id="driver"  role="dialog" aria-labelledby="exampleModalLabel"  class="pt-5">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        
      </div>
      <div class="modal-body">
       <div class="">
                    <h5 class="card-header text-center">Add New Vehicle</h5>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-danger text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>
                 <?php 
                 if (@$_GET['success']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['success']?></div>
                   <?php 
                 }
               ?>




                        <div class="card-body">
                        
                            <form class="form" method="post" action="vehicle_add.php">
                           
                               <div class="form-group">
                                    <label style="font-weight: bold;">Vehicle Type</label>
                                    <select class="form-control" name="vtype">
                                    <option>Select Type</option>
                                    <option>Bus</option>
                                    </select>
                                </div>
                              <div class="form-group">
                                    <label style="font-weight: bold;">Vehicle Color</label>
                                    <input type="text" class="form-control" name="vcolor" required="">

                                </div>
                          
                              
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Vehicle Number Plate</label>
                                    <input type="text" class="form-control" name="vreg" required="">
                                </div>
                                

   <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="add">Add Vehicle</button>
                                </div>
</div>


                               
                            </form>





                    


                                    
                        </div>
                    </div>
      </div>
      
    </div>
  </div>
</div>




<style>
        body, html {
  height: 100%;
}
.bg {
  /* The image used */
  background-image: url("img/b3.jpg");

  /* Half height */
  height: 91%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
</body> 
</html>
 <?php
 //session_start();
if (isset($_POST['submit'])) {
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `vehicle` WHERE vehicle_regno='".$_POST['vreg']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('VEHICLE ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `vehicle`(`vehicle_type`, `vehicle_color`, `vehicle_regno`) VALUES('".$_POST['vtype']."','".$_POST['vcolor']."','".$_POST['vreg']."')";
if(mysqli_query($con, $sql)){

}
}
}



if (isset($_POST['ass'])) {
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `assign` WHERE driver_name='".$_POST['driver']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('DRIVER ALREADY ASSIGNED!!');</script>";
}
else{
$sql="INSERT INTO `assign`(`driver_name`, `vehicle_regno`)  VALUES('".$_POST['driver']."','".$_POST['vehicle']."')";
if(mysqli_query($con, $sql)){

}
}
}







 ?>