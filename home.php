<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>OVBA</title>
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
   
    <script src="https://kit.fontawesome.com/2926c0bc39.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/sl.css">
</head>
<body >
	
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
		<br>
		<h5>Our Featured Services</h5><br>
    <h2>Best Automotive <br>
Repair in Burnaby</h2><br><br><br>
<p align = "center"> Our repair services keeps your vehicle moving smoothly and efficiently.b<br>
 Whether it’s a small maintenance job or a larger repair, 
 <br>our skilled and certified technicians have the experience
  <br>to take care of all your vehicle repair needs. 
</p>
<br><br><br><br><br><br><br><br>
<h4>Welcome To Our Shop </h4><br>
    <h5>We're the most Honest and Trusted Automotive Repair in Burnaby </h5>
<p>At KMF Automotive, we pride ourselves on being an active member of our community, customer satisfaction is our top priority. We understand the importance of your vehicle to your daily life and we work hard to get you back on the road as quickly as possible. So, bring your vehicle to us for all your auto repair needs, and experience the difference that quality service can make.</p>. 

    </div>
    <div class="col">
		<br>
    <table class="table table-dark table-striped-columns">
	<tr>
		<th>Our Services</th>
	</tr>
		<th> All services</th>
	</tr>
	<tr>
		<th>Clutch Repair</th>
	</tr>
		<th> Timing Belt</th>
	</tr>
	<tr>
		<th>Tire Repair/th>
	</tr>
		<th> A/C services</th>
	</tr>
	<tr>
		<th>Break Repair</th>
	</tr>
		<th> Oil Change</th>
	</tr>	
</table>
<h2>Opening Hours</h2>
<table class="table table-success table-striped-columns">
<tr>
		<th>MONDAY : 9.00 AM TO 5.00 PM </th>
	</tr>
		<th> TUEEDAY : 9.00 AM TO 5.00 PM </th>
	</tr>
	<tr>
		<th>WEDNESDAY : 9.00 AM TO 5.00 PM</th>
	</tr>
		<th> THURESDAY : 9.00 AM TO 5.00 PM</th>
	</tr>
	<tr>
		<th>FRIDAY : 9.00 AM TO 5.00 PM</th>
	</tr>
		<th> SATURDAY : 9.00 AM TO 5.00 PM</th>
	</tr>
	<tr>
		<th>SUNDAY : WE ARE CLOSED</th>
</table>


    </div>
  </div>
  <div class="row">
    <div class="col">
	<div class="card mb-3">
    <div class="card-body">
    <h5 class="card-title"><i class="fa-solid fa-hand-holding-dollar fa-beat fa-xl" style="color: #e12d31;"></i></h5>
	<h4>Affordable Prices</h4>
    <p class="card-text">We offer fair and competitive prices for our services, and we're always transparent about our pricing. We believe that our customers should not have to overpay for quality auto repair and maintenance services..</p>
    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
  </div>
</div>

    </div>
    <div class="col">
	<div class="card mb-3">
    <div class="card-body">
    <h5 class="card-title"><i class="fa-solid fa-screwdriver-wrench fa-beat fa-xl" style="color: #f2021b;"></i></h5>
	<h4>Use of high-quality parts and equipment</h4>
    <p class="card-text">We use only the best parts and equipment available to ensure that your vehicle is running at its best. This means you can trust that the work we do will last..</p>
    <p class="card-text"><small class="text-body-secondary">Last updated 45 mins ago</small></p>
  </div>
</div>
    </div>
    <div class="col">
	<div class="card mb-3">
    <div class="card-body">
    <h5 class="card-title"><i class="fa-solid fa-certificate fa-beat fa-xl" style="color: #ec1c45;"></i></h5>
	<h4>Certified technicians</h4>
    <p class="card-text">Our friendly team of highly skilled and certified technicians have the experience and knowledge to ensure they have the knowledge and skills to diagnose and repair a wide range of vehicles.</p>
    <p class="card-text"><small class="text-body-secondary">Last updated 12 mins ago</small></p>
  </div>
</div>
    </div>
  </div>
</div>



<?php 
include 'includes/footer.php';
?>
	
<script src="js/jsfile.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


