<?php 
include "new.php";

//write the query to get data from users table

$sql = "SELECT * FROM Passenger";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>users</h2>
<table class="table">
	<thead>
    <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile No.</th>
            <th>From</th>
            <th>To</th>
            <th>Date</th>
            <th>Time</th>
	</tr>
	</thead>
	<tbody>	
		<?php
        if ($result->num_rows > 0) {
            //output data of each row
            while ($row = $result->fetch_assoc()) {
    ?>

                <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Firstname']; ?></td>
                <td><?php echo $row['Lastname']; ?></td>
                <td><?php echo $row['Phone']; ?></td>
                <td><?php echo $row['From_City']; ?></td>
                <td><?php echo $row['To_City']; ?></td>
                <td><?php echo $row['DepartureDate']; ?></td>
                <td><?php echo $row['DepartureTime']; ?></td>
                <td><a class="btn btn-info" href="update.php?ID=<?php echo $row['ID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?ID=<?php echo $row['ID']; ?>">Delete</a></td>
                </tr>	
                
    <?php		}
        }
    ?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>