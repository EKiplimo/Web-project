
<!-- Connection to DB -->
<?php
$severname = "localhost";
$username = "root";
$PASS = "root";
$dbname = "Ticket";

$conn = new mysqli($severname, $username, $PASS, $dbname);

if(!$conn)
{
	die(mysqli_error($conn));
}
?>