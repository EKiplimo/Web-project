<?php

include "new.php";

$email = $password = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$sql = "SELECT * FROM Staff WHERE Email='$email' AND Password='$pwd'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$ID = $row['ID'];
		$email = $row["Email"];
		session_start();
		$_SESSION['ID'] = $ID;
		$_SESSION['Email'] = $email;
	}
	header("Location: view2.php");
}
else
{
	// echo "Invalid email or password";
}

?>

<form  method="POST" action="">
	<h1>Staff Login</h1>
	
  
    <label for="email">Email:</label>
    <div >
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  
  
    <labelfor="password">Password:</label>
    <div > 
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
    </div>
  
  
    <div>
      <button type="submit" name="login">Login</button>
    </div>
  </div>
</form>
</div>