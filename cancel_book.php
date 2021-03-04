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
   <nav class="navbar navbar-expand-lg navbar-light bg-primary" >

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

 <ul class="navbar-nav  mt-lg-0 ml-auto">
    <li class="nav-item">
     <a href="dashboard.php" style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" ><i class="fa fa-home fa-2x"></i></a>
      </li>
 </ul>
 </div> 
 </nav>
 

<div class="bg">
     <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-5 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
              <h5 class="card-title text-center" style="color: blue">CANCEL BOOKING</h5>
              <?php 
                 if (@$_GET['Empty']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['Empty']?></div>
                   <?php 
                 }
               ?>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-danger text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>


              <form class="form-signin" method="post" action="cancel.php">
              <div class="form-group row">
                  <label for="inputEmail">Date</label>
                   <?php 
                                 //  session_start();
                                $con=mysqli_connect("127.0.0.1","root","","vehicle");
        $ww = "SELECT * FROM  `book` WHERE `date`='".$_SESSION['date']."' and passenger_id='".$_SESSION['passenger']."'";
                                $query_run=mysqli_query($con,$ww);
                                while($row=mysqli_fetch_array($query_run)) {?>
                               
                             <input type="text" value="<?php echo $row['date'];?>" required="" name="id" class="form-control" readonly="readonly">
                             <?php } ?>       
              </div>
             
              <button class="btn btn-lg btn-danger btn-block text-uppercase" name="submit" type="submit">Cancel</button>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>















   






   
    <style>
         #login .container #login-row #login-column #login-box {
  margin-top: 0px;
  max-width: 800px;
  height: 500px;
  border: 1px solid #9C9C9C;
  background-color: white;
}
#login .container #login-row #login-column #login-box #login-form {
  padding-top: 0px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
        body, html {
            margin: 0;
  padding: 0;
  height: 100%;
}
.bg {
  /* The image used */
   /*  background-image: url("img/b3.jpg");

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
$con=mysqli_connect("127.0.0.1","root","","mololine");
$query ="SELECT * FROM `book`  WHERE start='".$_POST['from']."' AND end='".$_POST['to']."' AND seat='".$_POST['sit']."' AND date='".$_POST['date']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
   echo "<script type='text/javascript'>alert('SEAT ALREADY BOOKED!!');</script>";

}
else{
  $add ="INSERT INTO `book`(`num`, `cont`, `name`, `email`, `start`, `end`, `seat`, `date`) VALUES ('".$_POST['id']."','".$_POST['cont']."','".$_POST['name']."','".$_POST['email']."','".$_POST['from']."','".$_POST['to']."','".$_POST['sit']."' ,'".$_POST['date']."')";
if(mysqli_query($con, $add)){

}

}
}

?>