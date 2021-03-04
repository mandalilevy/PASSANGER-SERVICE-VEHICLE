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
<body>
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

<ul class="navbar-nav  mt-lg-0 ml-auto-auto">
 
</ul>
 <ul class="navbar-nav  mt-lg-0 mx-auto">
     <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="booked.php">Booked Seats</a>
      </li>
        <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" >|</a>
      </li>
    <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="book.php">Book A Seat</a>
      </li>
         <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" >|</a>
      </li>
       <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="ticket.php">Print Ticket</a>
      </li>
         <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" >|</a>
      </li>
       <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="date.php">Cancel Booking</a>
      </li>
         <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" >|</a>
      </li>
       <li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="passenger_update.php">Update Details</a>
      </li>
 </ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
   <li class="nav-item">
      
   <?php 
echo '<a class="nav-link ml-auto" style="color: white; font-weight:bolder; font-family:Verdana"  href="passlogout.php?logout">Sign Out </a>';
  ?>
   
      </li>
 </ul>
 </div> 
 </nav>
 <div class="bg">
  <div class="container pt-sm-4">
  <div class="">
    <div class="">
       <table class="table  table-bordered table-responsive-sm table-sm">
        <center><legend style="color: white;font-weight: bolder;">FARE CHART</legend></center> 
    <thead class="thead-light">

<tr>
<th scope="col" style="width: auto;" ><strong>FROM</strong></th>
<th scope="col" style="width: auto;"><strong>TO</strong></th>
<th scope="col" style="width: auto;"><strong>PRICE</strong></th>


</tr>
</thead>
<tbody class="bg-light">
<?php
$con=mysqli_connect("127.0.0.1","root","","vehicle");
$query ="SELECT * FROM `price`";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?>

<tr><td style="width: auto;"><?php echo $row["start"]; ?></td>
<td  style="width: auto;"><?php echo $row["end"]; ?></td>
<td  style="width: auto;"><?php echo $row["price"]; ?></td>


</tr>
<?php } ?>

</tbody>
</table>
  </div>
</div>

</div> 
















   
 </div>


<div class="modal fade" id="pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
      <div id="login">
        <h3 class="text-center text-white"></h3>
        <div class="">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="">
                    <div id="login-box" class="">
                      <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

</div>



                      <div class="card-body">
                        <h3 class="text-center text-info"> <u>BOOK A SEAT WITH US </u></h3>

<?php 
                 if (@$_GET['Empty']==true)
                 {
                   ?>
                  <div style="font-weight: bolder;" class="card-title alert-light text-secondary text-center text-uppercase"><?php echo $_GET['Empty']?></div>
                   <?php 
                 }
               ?>

<?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div style="font-weight: bolder"   class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>






                        <form id="login-form" class="form" action="" method="post">
                           

                             <div class="form-group">
                                <label for="username" class="text-info">ID Number:</label><br>
                                
                                <?php 
                                 //  session_start();
                                $con=mysqli_connect("127.0.0.1","root","","vehicle");
        $ww = "SELECT * FROM  `customer` WHERE `customer_id`='".$_SESSION['passenger']."'";
                                $query_run=mysqli_query($con,$ww);
                                while($row=mysqli_fetch_array($query_run)) {?>
                               
                             <input type="text" value="<?php echo $row['customer_id'];?>" required="" name="id" class="form-control" readonly="readonly">
                                  </div>
                                  <div class="form-group">
                                    <label for="username" class="text-info">Name:</label><br>
                              <input type="text" value="<?php echo $row['customer_name'];?>" required="" name="name" class="form-control" readonly="readonly">
                                  </div>
                                   <div class="form-group">
                                    <label for="username" class="text-info">Phone Number:</label><br>
                              <input type="text" value="<?php echo $row['customer_telno'];?>" required="" name="cont" class="form-control" readonly="readonly">
                                  </div>
                                   <div class="form-group">
                                    <label for="username" class="text-info">Email Address:</label><br>
                              <input type="text" value="<?php echo $row['customer_email'];?>" required="" name="email" class="form-control" readonly="readonly">
                                  </div>
                              <?php } ?>


                              
                          














                            <div class="form-group">
                                <label for="username" class="text-info">From:</label><br>
                                <select required="" class="form-control"  name="from" id="">
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
                           <div class="form-group">
                                <label for="username" class="text-info">To:</label><br>
                                <select required="" class="form-control"  name="to" id="">
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
                           <div class="form-group">
                                    <label for="username" class="text-info">Seat Number (1 - 56):</label><br>
                              <input type="number" value="" required="" name="seat" min="1" max="56" class="form-control">
                                  </div>
                           
                            <div class="form-group">
                         <label for="username" class="text-info">Date of Travel:</label><br>
                                <input required="" type="date" name="date" class="form-control" >
                            </div>
                            <div class="form-group">
                         
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="BOOK">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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