<?php

$host="localhost";
$user="root";
$password="";
$db="hostel";

$conn=mysqli_connect($host,$user,$password,$db);

 if(!$conn){
      die('Could not connect: ' . mysql_error());
 }

?>