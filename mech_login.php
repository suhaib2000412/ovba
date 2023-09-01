
<?php

ob_start();
session_start();



if (isset($_POST['submit'])) 
{

 $email=$_POST['email'];
 $password=$_POST['password'];

 
 $connection = mysqli_connect('localhost','root','','ovba'); //mysqli_connect = to connect database
    
    $sql = "SELECT * FROM  mechanic WHERE email='$email' AND password = '$password'"; 
    $result=mysqli_query($connection, $sql);
    $row  = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
      header('location: ./admin/index.php');
      
    }
    else{
      echo"<script> alert('email or password incorrect !')</script>";
    }
    
    
  }



?>

<!doctype html>
<html lang="en">
  <head>
    <title>OVBA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/2926c0bc39.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
  	.error{
    	color: red;
        font-style: italic;
    }
  </style>
  </head>
  <body>
   
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">OVBS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link " href="contact.php">Contact Us</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link " href="sendReq.php">Send Request</a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-right">
          <li class="nav-item ">
              <a class="nav-link" href="mech_login.php"><i class="fa-solid fa-user"></i> Mechanic  <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item ">
              <a class="nav-link" href="./admin/adminLogin.php"><i class="fa-solid fa-user"></i> Admin <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="register.php"><i class="fa-sharp fa-solid fa-user-plus"></i> Register</a>
            </li>
            </li>
          </ul>
        </div>
      </nav><br><br><br><br><br>
      <div class="container text-center">
  <div class="row">
    <div class="col">
    <h2 class="lg1">Mechanic</h2>
  <form action="mech_login.php" method="post" id="registration">
    
  <div class="txt_field">
    
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type = "email" class = "form-control" name = "email" placeholder = "Email"/>
</div>
  <div class="txt_field">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type = "password" class = "form-control" name = "password" placeholder = "Password" id = "password"/>
  </div>
  <br><br><br><br><br><br>
  <button type="submit" class="lgbtn" name="submit">Loggin</button>
</form>
    </div>
    <div class="col">
    <img src="./images/6.gif" alt="repair" width="400px" height="300px" >
    <br><br>
                    <h4>A Vehicle Breakdown Service Provider </h4>
                
    </div>
    
  </div>
</div>
      <!-- <div class="container">
        <div class="conatiner black">
        <h4 align = "center">MECHANIC </h4>
            <div class="row ">
        
                <div class="col-sm-6 h1"><img src="./images/1.png" alt="repair" width="200px" height="200" class="rounded-circle img">
                    <h4>A Vehicle Breakdown Service Provider </h4>
                </div>


                
                <!-- <div class="col-sm-6">
                  <form action="mech_login.php" method="post">
                    <br><br><br><br>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                  </form>
                
                
                </div> -->
              </div>

      </div>
    </div>
       -->
      <br><br><br>
    <?php 
include 'includes/footer.php';
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/sendformvali.js"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>