<?php

include "new.php";


$fname = $lname = $gender = $email = $password = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pwd = $_POST['password'];

$sql = "INSERT INTO Staff (Firstname,Lastname,Email,Phone,Password) VALUES ('$fname','$lname','$email','$phone','$pwd')";
$result = mysqli_query($conn, $sql);


if($result)
{
  echo "Registration Succesful";
	
}
else
{
	
}
?>



  
<form  action="" method="POST">
	<h1>Staff Registration</h1>
	
    <label  for="firstname">First Name:</label>
    <div>
        <input type="text" name="firstname"  id="firstname" placeholder="Enter Firstname">
  </div>

  <label for="lastname">Last Name:</label>
  <div>
        <input type="text" name="lastname"  id="lastname" placeholder="Enter Lastname">
  </div>
  
  <label for="email">Email:</label>
  <div>
        <input type="email" name="email" id="email" placeholder="Enter email">
  </div>

  <label  for="phone">Phone:</label>
  <div>
        <input type="phone" name="phone" id="phone" placeholder="Enter phone">
  </div>
  
  <label  for="password">Password:</label>
  <div>
      <input type="password" name="password" id="password" placeholder="Enter password">
  </div>
  
  <div> 
      <button type="submit" name="create">Submit</button>
  </div>
</form>
</div>