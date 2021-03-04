  <!DOCTYPE html>
  <html lang="en">
  <head>
  <title>PASSENGER SERVICE VEHICLE MANAGEMENT SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <link rel = "icon" href = "img/b1.jpg" type = "image/b1-icon"> 
  </head>
  <body class="bg-success" style="background-image:  url(img/b3.jpg);height: 100%; background-position: center;  background-repeat: no-repeat;  background-size: cover;">
   <div class="container">
       

 <div class="container" >
    <div class="row justify-content-center">
      <div class="col-lg-5 mt-4 p-2 rounded" style="background-color: white">
        <div class="">
          <div >
              <h5 class="card-title text-center" style="color: blue">ADMIN REGISTRATION</h5>
             <?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-danger text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>

       <form action="adminreg_insert.php" method="POST">       
  <div class="form-group row">
  <label for="idn" class="col-sm-2 col-form-label">ID Number</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="idn" placeholder="ID Number" name="id" maxlength="10" required="">
  </div>
  </div>
              <div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="name" name="name" required="">
  </div>
  </div>
  <div class="form-group row">
  <label for="em" class="col-sm-2 col-form-label">Email Address</label>
  <div class="col-sm-10">
      <input type="email" class="form-control" id="em" name="email" placeholder="email" required="">
  </div>
  </div>
              <div class="form-group row">
  <label for="nm" class="col-sm-2 col-form-label">Phone Number</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="nm" placeholder="contacts"  name="cont" maxlength="10" required="">
  </div>
  </div>

   <div class="form-group row">
  <label for="ps" class="col-sm-2 col-form-label">Password</label>
  <div class="col-sm-10">
      <input type="password" class="form-control" name="pas" id="ps" placeholder="Password" required="">
  </div>
  </div>

  <div class="form-group">
  <div class="">
    <button type="submit" id="Register" class="btn btn-success">Register</button>
    <div style="float: right"> <a href="admin.php">Login Here</a>  </div>   
  </div>

  </div>

  <span id="success_message" class="text-success"></span>
       
  </form>


          </div>
        </div>
      </div>
    </div>
  </div>

















  </body> 
  </html>
