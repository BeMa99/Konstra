<?php 
include_once 'connect.php';
$email = isset($_GET['email'])?$_GET['email']:'';
$sql = "DELETE FROM suggestions WHERE email='berclaym@gmail.com'";
if($conn->query($sql) === True)
{
	echo "Comment Deleted successfully";
}
else
{
	echo "Error deleting" . mysqli_error($conn);
}
mysqli_close($conn);
?>