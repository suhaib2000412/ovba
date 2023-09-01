<?php 

include ('./admin/includes/db.php');
$connection = mysqli_connect('localhost','root','','ovba'); //mysqli_connect = to connect database


if (isset($_POST['submit'])) 
{
$name=$_POST['name'];
$zip=$_POST['zip'];
$vhprblm=$_POST['vhprblm'];

 $address=$_POST['address'];
 $ph_no=$_POST['ph_no'];
 $location=$_POST['location'];

 
    
    $sql = "INSERT INTO user (`name`, `ph_no`, `vhprblm`,`address`,`zip`,`location`) VALUES ('$name', '$ph_no', '$vhprblm','$address','$zip','$location')";
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
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="./css/cssfile.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
   
    <script src="https://kit.fontawesome.com/2926c0bc39.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="./css/sl.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
  	.error{
    	color: red;
        font-style: italic;
    }
  </style>
  
</head>
  <body class="bg">
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
    
      <?php 
   include 'includes/home.php'
   ?>
   <div class="container text-center">
  <div class="row">
    <div class="col">
      <br><br>
    <form action="sendReq.php" method="post" class="row g-3" id="registration"">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Contact Number</label>
    <input type="tel" class="form-control" name="ph_no">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Mention Vehicle Problem</label>
    <input type="text" class="form-control" name="vhprblm" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Nearest Popular Place Name Or Bulding Name</label>
    <input type="text" class="form-control" name="address" placeholder="Apartment, studio, or floor">
    <label class="lbl">Such As eg:(School,PostOffice,Hospital)</label>
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">Select Your Location</label>
    <select id="inputState" class="form-select" name="location">
    <?php
                      $select_all_query = "SELECT DISTINCT location FROM mechanic";
                      $select_all_result = mysqli_query($connection,$select_all_query);

                      while($row = mysqli_fetch_assoc($select_all_result)){
                      
                        $location = $row['location'];
                        
                        echo"<option value=''>{$location}</option>";
                      }
                      ?>

    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
    </div>
    <div class="col">
    <table class="table">
      <br><br><br>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">user</th>
      <th scope="col">address</th>
      <th scope="col">Status</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
                      $select_all_query = "SELECT * FROM user";
                      $select_all_result = mysqli_query($connection,$select_all_query);

                      while($row = mysqli_fetch_assoc($select_all_result)){
                        
                        $name = $row['name'];
                        $address = $row['address'];
                        $id=$row['id'];
                        $status=$row['status'];
                    

                        echo"<tr>
                              <td>{$id}</td>
                              <td>{$name}</td>
                              <td>{$address}</td>
                              <td>{$status}</td>
                          
                              
                              </tr>";
                      }
                      ?>
  </tbody>
</table>
    </div>
   
  </div>
</div>
<div class="conatiner">


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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>