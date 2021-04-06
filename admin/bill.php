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
	<div class="col-md-8" id="main_content">
		<center><h3>Bill</h3></center>
		<form action="" method="post">
			<div class="form-group">
				<label for="name">Bill number:</label>
				<input type="number" name="billno" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="name">Patient id:</label>
				<input type="number" name="id" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="name">Patient Name:</label>
				<input type="text" name="name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="name">Mobile Number:</label>
				<input type="mobile" name="mobile" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="name">Bill amount:</label>
				<input type="amount" name="amount" class="form-control" required>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Generate</button>
		</form>




   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <!-- JavaScript Bundle with Popper -->
  </body>
</html>
<?php
if(isset($_POST['submit'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"cms");
  $query = "insert into bill values('$_POST[billno]','$_POST[id]','$_POST[name]',$_POST[mobile],'$_POST[amount]')";
  $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
  alert("Bill generated")
  window.location.href = "admin_dashboard.php";
</script>
<?php }
 ?>
