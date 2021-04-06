<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Covid care Management System </title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	  <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1-dist/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <style type="text/css">
  		#side_bar{
  			background-color: #6A9EF2;
  			padding: 50px;
  			width: 300px;
  			height: 500px;
        color: #e9ecef;
  		}
      body{
        background-image: url(c7.jpg);
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
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Patient Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Registeration</a>
				</li>
			</ul>
		</div>
	</nav><br>
  <span><marquee>Protect yourself and others from COVID-19</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>What to do to keep yourself and others safe from COVID-19</h5>
			<ul>
				<li>Maintain at least a 1-metre distance between yourself and others</li>
				<li>Make wearing a mask a normal part of being around other people.</li>
				<li>The appropriate use, storage and cleaning or disposal are essential to make masks as effective as possible.</li>
			</ul>
			<h5>Cautions before wearing a mask.</h5>
			<ul>
				<li>Clean your hands before you put your mask on, as well as before and after you take it off.</li>
				<li>Make sure it covers both your nose, mouth and chin.</li>
				<li>When you take off a mask, store it in a clean plastic bag.</li>
				<li>Dispose a medical mask in a trash bin only.</li>
				<li>Don’t use masks with valves.</li>
			</ul>
		</div>
		<div class="col-md-8" id="main_content">
      <center><h3>Patient Login</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Login ID:</label>
					<input type="text" name="logid" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>
      <?php
				session_start();
				if(isset($_POST['login'])){
          $connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"cms");
          $query = "select * from patient where logid = '$_POST[logid]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){

						if($row['logid'] == $_POST['logid']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['logid'] = $row['logid'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
        }

			?>
  </body>
</html>
