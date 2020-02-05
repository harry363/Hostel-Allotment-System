<?php
    session_start();
	include_once 'dbconnect.php';


	$SID=mysqli_real_escape_string($conn,$_POST['SID']);
    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
	$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
	$Branch=mysqli_real_escape_string($conn,$_POST['Branch']);
	$semester=mysqli_real_escape_string($conn,$_POST['semester']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$dob=mysqli_real_escape_string($conn,$_POST['dob']);
	$mobile_s=mysqli_real_escape_string($conn,$_POST['mobile_s']);
	$mobile_p=mysqli_real_escape_string($conn,$_POST['mobile_p']);
	$fathers_name=mysqli_real_escape_string($conn,$_POST['fathers_name']);
	$pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
	$city=mysqli_real_escape_string($conn,$_POST['city']);
	$state=mysqli_real_escape_string($conn,$_POST['state']);
	$country=mysqli_real_escape_string($conn,$_POST['country']);
	
	$sql= "INSERT INTO student VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
	  
	$stmt=mysqli_stmt_init($conn);  
	if(!mysqli_stmt_prepare($stmt, $sql)){
      echo "SQL Error";
    } else{
		mysqli_stmt_bind_param($stmt,"isssissiisisss",$SID,$firstname,$lastname,$Branch,$semester,$email,$dob,$mobile_s,$mobile_p,$fathers_name,$pincode,$city,$state,$country);
        mysqli_stmt_execute($stmt);
		echo "New record created successfully";
    }

	header("Location:preferences.php");
	
mysqli_close($conn);
session_destroy();
?>