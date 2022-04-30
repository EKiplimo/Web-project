<?php

include "new.php";


$fname = $lname = $gender = $email = $password = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mobile = $_POST['phone'];
$stat = $_POST['station'];
$dest = $_POST['destination'];
$Date = $_POST['date'];
$Time = $_POST['appt'];



$sql = "INSERT INTO Passenger (Firstname,Lastname,Phone,From_City,To_City,DepartureDate,DepartureTime) VALUES ('$fname','$lname','$mobile','$stat','$dest','$Date','$Time')";
$result = mysqli_query($conn, $sql);
if($result)
{
  echo "Succesful Reservation";
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ticket.html</title>
	<style type="text/css">
		div{
			padding: 5px;
		}
		#name, #from, #to, #date1, #date2, #number{
			width: 100%;
			height: 40px;
			text-align: center;
		}
	</style>

	<link rel="stylesheet" type="text/css" href="expresstravel.css">
	<link href="https://fonts.googleapis.com/css2?family=Diplomata+SC&family=Fredericka+the+Great&family=Goldman:wght@700&family=Lobster&family=Lobster+Two:ital,wght@1,400;1,700&family=Hind:wght@300&family=Monoton&family=Ms+Madi&family=Updock&display=swap" rel="stylesheet">
</head>
<body>
	<div class="logo float"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlPH3afgvwxsOWPfoC6GfXBV3D5uyGAJ4nfA&usqp=CAU" height="130px"></div>

	<div class="header"><h1>EXPRESS TRAVELS</h1></div>

<div class="main">

	<div class="navbar"><center><ul>
		<a href="expresstravel.html" target="_blank">Home</a>
		<a href="about.html" target="_blank">About Us</a>
		<a href="ticket.html" target="_blank">Print Ticket</a>
		<a href="contact.html" target="_blank">Contact Us</a>
		</center></ul>
	</div>
	<br>
</div>

	<center><h1 class="h3">Print Ticket</h1></center>
	<center><div class="details"><h3>Enter Ticket Details</h3></div></center>
<div class="form">

<form  action="" method="POST">
<fieldset>
	<h1>Ticket Reservation</h1>
    
	<label  for="firstname">First Name:</label><br>
    <input type="text" name="firstname"  id="firstname" class="signup-form-input" placeholder="Enter Firstname"><br>

    <label for="lastname">Last Name:</label><br>
    <input type="text" name="lastname"  id="lastname" class="signup-form-input" placeholder="Enter Lastname"><br>
  
    <label for="phone">Mobile No:</label><br>
    <input type="tel" name="phone"  id="phone" class="signup-form-input" placeholder="Enter Phone"><br>
  
    <label  for="station">From:</label><br>
    <input type="text" name="station"class="signup-form-input"id="station" ><br>
  
    <label  for="destination">To:</label><br>
    <input type="text" name="destination"  id="destination" class="signup-form-input"><br>
  
    <label  for="date">Departure Date:</label><br>
    <input type="date" name="date"  id="date" class="signup-form-input"><br>
  
    <label  for="appt">Departure Time:</label><br>
    <input type="time" name="appt"  id="appt" class="signup-form-input" ><br>
  
    <input type="submit" name="submit">
</fieldset>
</form>
</div>

<div class="footer">
    <h3><span class="material-symbols-outlined"></span>Copyright 2022</h3>
</div>
	
</body>



