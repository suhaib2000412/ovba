<?php
$connection = mysqli_connect('localhost','root','','ovba'); //mysqli_connect = to connect database


if (isset($_POST['submit'])) 
{
$name=$_POST['name'];
$ph_no=$_POST['ph_no'];
$location=$_POST['location'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];

    
    $sql = "INSERT INTO `mechanic`(`name`, `email`, `password`, `cpassword`,`location`,`ph_no`) VALUES ('$name','$email','$password','$cpassword','$location','$ph_no')";
    $result=mysqli_query($connection, $sql);
    echo"<script> alert('Successfully Added !')</script>";
    
  }
  else{
 
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
    <!--<script defer src="./js/vali.js"></script>-->
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
      </nav>
      <div class="container">
      
            
            <div class="row ">
        
                <div class="col-sm-6 h1"><img src="./images/1.png" alt="repair" width="200px" height="200" class="rounded-circle img">
                    <h4>A Vehicle Breakdown Service Provider </h4>
                </div>


                
                <div class="col-sm-6"><br><br>
                <form id = "registration" action="register.php"  method="post">
                    	<input type = "text" class = "form-control" name = "name" placeholder = "Username"/>
                        <br/>
                        <input type = "text" class = "form-control" name = "email" placeholder = "Email"/>
                        <br/>
                        <input type = "password" class = "form-control" name = "password" placeholder = "Password" id = "password"/>
                        <br/>
                        <input type = "password" class = "form-control" name = "cpassword" placeholder = "Confirm Password"/>
                       <br>
                       <input type = "tel" class = "form-control" name = "ph_no" placeholder = "Contact Number" />
                       <br>
                       <input type = "text" class = "form-control" name = "location" placeholder = "address"/>
                       <br>
                       
                        <button type = "submit" name="submit" class = "btn btn-primary">Submit</button>
                    </form>
                </div>
              </div>
              
      </div>
    </div>
      
      <br><br><br>
    <?php 
include 'includes/footer.php';
?>
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/sendformvali.js"></script>  
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    
   
    <!-- <script  src="js/vali.js"></script> -->

  </body>
</html>


