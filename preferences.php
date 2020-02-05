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

<h3 style="text-align:center;">Preferences Form</h3>

<div class="container">
  <form action="action_pref.php" method="POST">
	
	 <label for="sid">SID</label>
    <input type="number" id="sid" min="11111111" max="99999999" name="SID" placeholder="Your Sid..">
	
	 <label for="block">Block</label>
    <input type="text" id="block" name="Block" placeholder="Your Preferred Block (A,C)..">
	
	 <label for="sid1">Friend 1 SID</label>
    <input type="number" id="sid1" min="11111111" max="99999999" name="SID1" placeholder="First Friend's Sid..">
	
	 <label for="sid2">Friend 2 SID</label>
    <input type="number" id="sid2" min="11111111" max="99999999" name="SID2" placeholder="Second Friend's Sid..">
	
	 <label for="sid3">Friend 3 SID</label>
    <input type="number" id="sid3" min="11111111" max="99999999" name="SID3" placeholder="Third Friend's Sid..">
	
	 <label for="sid4">Friend 4 SID</label>
    <input type="number" id="sid4" min="11111111" max="99999999" name="SID4" placeholder="Fourth Friend's Sid..">
	
	 <label for="si5">Friend 5 SID</label>
    <input type="number" id="sid5" min="11111111" max="99999999" name="SID5" placeholder="Fifth Friend's Sid..">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
