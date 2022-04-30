<?php 
include "new.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['ID'])) {
	$ID = $_GET['ID'];

	// write delete query
	$sql = "DELETE FROM `Passenger` WHERE `ID`='$ID'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>
