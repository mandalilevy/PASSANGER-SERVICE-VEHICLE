<?php 

if (isset($_POST['search'])) {

$valuetosearch=$_POST['value_to_search'];
$sql="SELECT * FROM `book` WHERE CONCAT( `passenger_id`, `passenger_name`, `contacts`, `email_address`, `start`, `end`, `seat`, `date`, `vehicle`, `time`) LIKE '%".$valuetosearch."%'"; 
$search_result= filtertable($sql);
}
else{
$sql="SELECT * FROM `book`";
$search_result=filtertable($sql);

}

function filtertable($sql)
{
  $con=mysqli_connect("127.0.0.1","root","","vehicle");
  $filter_result=mysqli_query($con,$sql);
  return $filter_result;
}
 ?>


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
<body>
<div class="container">
 <nav class="navbar navbar-expand-lg bg-primary">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav  mt-lg-0 mx-auto ">
      
      <li class="nav-item">
        <a style="color: white; font-family:Verdana" class="nav-link" href="admin_homepage.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      </li>

    
    </ul> 
 
  </div>
</nav>
</div>
<div class="container" style="padding-top: 10px">

<div >
   
  <div class="table-responsive">
  <table class="table  table-striped table-responsive-sm table-sm">
<thead>
<tr>
<th scope="col"><strong>S.No</strong></th>
<th scope="col"><strong>PASSANGER NAME</strong></th>
<th scope="col"><strong>CONTACTS</strong></th>
<th scope="col"><strong>FROM</strong></th>
<th scope="col"><strong>TO</strong></th>
<th scope="col"><strong>VEHICLE</strong></th>
<th scope="col"><strong>SEAT</strong></th>
<th scope="col"><strong>DATE</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
//$con=mysqli_connect("127.0.0.1","root","","library");
//$query ="SELECT * FROM `book`";
//$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($search_result)) { ?>
<tr><td ><?php echo $count; ?></td>
<td><?php echo $row["passenger_name"]; ?></td>
<td><?php echo $row["contacts"]; ?></td>
<td><?php echo $row["start"]; ?></td>
<td><?php echo $row["end"]; ?></td>
<td><?php echo $row["vehicle"]; ?></td>
<td><?php echo $row["seat"]; ?></td>
<td><?php echo $row["date"]; ?></td>


</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>




</div>




























</body>
</html>