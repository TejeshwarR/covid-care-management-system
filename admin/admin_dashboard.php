<?php
  require('function.php');

	session_start();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Admin Dashboard </title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- CSS only -->
	  <!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1-dist/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script> -->
    <style type="text/css">
  		#side_bar{
  			background-color: #6A9EF2;
  			padding: 50px;
  			width: 300px;
  			height: 500px;
        color: #e9ecef;
  		}
      body{
        background-image: url(c5.webp);
        background-repeat: no-no-repeat;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Covid care Management System</a>
			</div>
      <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">

        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>

			</ul>

		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
        <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Patient</a>
				<div class="dropdown-menu">
					<a href="../signup.php" class="dropdown-item">New Registeration</a>
					<a href="patdel.php" class="dropdown-item">Delete patient record</a>
				</div>
			</li>
		</li>
	</ul>
</div>
</nav>
  <span><marquee>Protect yourself and others from COVID-19</marquee></span><br><br>
  <div class="row">
   <div class="col-md-3">
		 <div class="card bg-light" style="width: 300px">
				<div class="card-header">Patient information:</div>
				<div class="card-body">
					<p class="card-text"> Total number of patients:<?php echo get_patient_count();?></p>
					<a href="patlist.php" class="btn btn-primary" target="_blank">View Registered patients</a>
				</div>
       </div>
      </div>
			<div class="col-md-3">
	 		 <div class="card bg-light" style="width: 300px">
	 				<div class="card-header">Doctor information:</div>
	 				<div class="card-body">
	 					<p class="card-text"> Total number of Doctors:<?php echo get_doctor_count();?></p>
	 					<a href="doclist.php" class="btn btn-primary" target="_blank">List of Doctors
						</a>
	 				</div>
	        </div>
	       </div>
				 <div class="col-md-3">
					<div class="card bg-light" style="width: 300px">
						 <div class="card-header">Ward information:</div>
						 <div class="card-body">
							 <p class="card-text"> Total number of Wards:<?php echo get_ward_count();?></p>
							 <a href="ward.php" class="btn btn-primary" target="_blank">List of wards
							 </a>
						 </div>
						 </div>
						</div>
            <div class="col-md-3">
              <div class="card bg-light" style="width: 300px">
                <div class="card-header">Bill:</div>
                <div class="card-body">
                <a href="bill.php" class="btn btn-primary" target="-_blank">Generate bill
                </a>

                </div>

              </div>

            </div>

   </div>




   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <!-- JavaScript Bundle with Popper -->
  </body>
</html>
