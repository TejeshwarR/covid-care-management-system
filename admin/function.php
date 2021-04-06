<?php
function get_patient_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"cms");
		$patient_count = "";
		$query = "select count(*) as patient_count from patient";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$patient_count = $row['patient_count'];
		}
		return($patient_count);
	}
 ?>

 <?php
 function get_doctor_count(){
 		$connection = mysqli_connect("localhost","root","");
 		$db = mysqli_select_db($connection,"cms");
 		$doctor_count = "";
 		$query = "select count(*) as doctor_count from doctor";
 		$query_run = mysqli_query($connection,$query);
 		while($row = mysqli_fetch_assoc($query_run)){
 			$doctor_count = $row['doctor_count'];
 		}
 		return($doctor_count);
 	}
  ?>

  <?php
  function get_ward_count(){
  		$connection = mysqli_connect("localhost","root","");
  		$db = mysqli_select_db($connection,"cms");
  		$ward_count = "";
  		$query = "select count(*) as ward_count from ward";
  		$query_run = mysqli_query($connection,$query);
  		while($row = mysqli_fetch_assoc($query_run)){
  			$ward_count = $row['ward_count'];
  		}
  		return($ward_count);
  	}
   ?>
