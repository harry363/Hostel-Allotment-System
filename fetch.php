<?php
   $data="";
   $sql="SELECT * FROM preferencelist;";
  
   $stmt=mysqli_stmt_init($conn);
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
	   echo "SQL statement Failed!!!";
   }
   else{
	   mysqli_stmt_bind_param($stmt,"s",$data);
	   mysqli_stmt_execute($stmt);
	   $result=mysqli_stmt_get_result($stmt);
	   
	   while($row=mysqli_fetch_array($result,MYSQL_NUM)){
		   echo $row[0] . "<br>";
	   }
   }
   
	   

?>