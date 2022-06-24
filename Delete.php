<?php 
include_once 'connect.php';
$sql = "DELETE FROM suggestions WHERE fname='" . $_GET["fname"] . "'";
if(mysqli_query($conn, $sql))
{
	echo "Comment Deleted successfully";
}
else
{
	echo "Error deleting" . mysqli_error($conn);
}
mysqli_close($conn);
?>