<?php
    session_start();
	include_once 'dbconnect.php';

//if(isset($_POST['submit']))
//{
	$SID=mysqli_real_escape_string($conn,$_POST['SID']);
    $Block=mysqli_real_escape_string($conn,$_POST['Block']);
	$SID1=mysqli_real_escape_string($conn,$_POST['SID1']);
	$SID2=mysqli_real_escape_string($conn,$_POST['SID2']);
	$SID3=mysqli_real_escape_string($conn,$_POST['SID3']);
	$SID4=mysqli_real_escape_string($conn,$_POST['SID4']);
	$SID5=mysqli_real_escape_string($conn,$_POST['SID5']);
	
	$sql= "INSERT INTO preferencelist VALUES(?,?,?,?,?,?,?)";
	  
	$stmt=mysqli_stmt_init($conn);  
	if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL Error";
    } else{
		mysqli_stmt_bind_param($stmt,"isiiiii",$SID,$Block,$SID1,$SID2,$SID3,$SID4,$SID5);
        mysqli_stmt_execute($stmt);
		echo "New record created successfully";
    }

	header("Location:index.php");
	
//}
mysqli_close($conn);
session_destroy();
?>