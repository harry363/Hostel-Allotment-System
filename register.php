<?php
    session_start();
	include_once 'dbconnect.php';
?>	
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=date], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
body{
	background-image : url("pec.jpeg");
	opacity: 0.9;
	filter : alpha(opacity=70);
}
</style>
</head>
<body>

<h3 style="text-align:center;" >Registration Form</h3>

<div class="container">
  <form name="registration" action="action.php" method="POST">
  
    <label for="sid">SID</label>
    <input type="number" id="sid" name="SID" placeholder="Your Sid.." required>
	
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
	
	 <label for="branch">Branch</label>
    <input type="text" id="branch" name="Branch" placeholder="Your Branch.." required>
	
	<label for="semester">Semester</label>
    <input type="number" id="semester" name="semester" min="1" max="8" placeholder="Your Current Semester..(1-8)" required>
	
	 <label for="Email">Email ID</label>
    <input type="email" id="Email" name="email" placeholder="Your Email ID.." required>
	
	 <label for="DOB">Date Of Birth</label>
    <input type="date" id="DOB" name="dob" placeholder="Your Date Of Birth.." required>
	
	 <label for="Mobile_S">Mobile Number</label>
    <input type="number" id="Mobile_S" name="mobile_s" min="1111111111" max="9999999999" placeholder="Your Mobile number.." required>
	
	 <label for="Mobile_P">Mobile Number(Parent)</label>
    <input type="number" id="Mobile_P" name="mobile_p" min="1111111111" max="9999999999" placeholder="Your Parent's Mobile number.." required>
	
	 <label for="Fathers_name">Father's Name</label>
    <input type="text" id="Fathers_name" name="fathers_name" placeholder="Your Father's name.." required>
	
	<label for="Pincode">Pincode</label>
    <input type="number" id="Pincode" name="pincode" min="111111" max="999999" placeholder="Your Pincode.." required>
	
	 <label for="City">City</label>
    <input type="text" id="City" name="city" placeholder="Your City.." required>
	
	 <label for="State">State</label>
    <input type="text" id="State" name="state" placeholder="Your State.." required>
	
	 <label for="Country">Country</label>
    <input type="text" id="Country" name="country" placeholder="Your Country.." required>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
