<?php 
include "new.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $mobile = $_POST['phone'];
        $stat = $_POST['station'];
        $dest = $_POST['destination'];
        $Date = $_POST['date'];
        $Time = $_POST['appt'];
        $ID = $_POST['ID'];

		// write the update query
		$sql = "UPDATE `Passenger` SET `Firstname`='$fname',`Lastname`='$lname',`Phone`='$mobile',`From_City`='$stat',`To_City`='$dest',`DepartureDate`='$Date',`DepartureTime`='$Time' WHERE `ID`='$ID'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['ID'])) {
	$ID = $_GET['ID'];

	// write SQL to get user data
	$sql = "SELECT * FROM `Passenger` WHERE `ID`='$ID'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$fname = $row['Firstname'];
            $lname = $row['Lastname'];
            $mobile = $row['Phone'];
            $stat = $row['From_City'];
            $dest = $row['To_City'];
            $Date = $row['DepartureDate'];
            $Time = $row['DepartureTime'];
            $ID = $row['ID'];
            
		}

	?>
		<h2>User Update Form</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Personal information:</legend>
		    First name:<br>
		    <input type="text" name="firstname" value="<?php echo $fname; ?>">
		    <input type="hidden" name="ID" value="<?php echo $ID; ?>">
		    <br>
		    Last name:<br>
		    <input type="text" name="lastname" value="<?php echo $lname; ?>">
		    <br>
		    Mobile No.:<br>
		    <input type="tel" name="phone" value="<?php echo $mobile; ?>">
		    <br>
		    From:<br>
		    <input type="text" name="station" value="<?php echo $stat; ?>">
		    <br>
		    To:<br>
		    <input type="text" name="destination" value="<?php echo $dest; ?>">
		    <br>
            Departure Date:<br>
		    <input type="date" name="date" value="<?php echo $Date; ?>">
		    <br>
            Departure Time:<br>
		    <input type="time" name="appt" value="<?php echo $Time; ?>">
		    <br>
            <br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

		</body>
		</html>

	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view2.php');
	}

}
?>