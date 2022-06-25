<?php
include_once 'connect.php';
$email = isset($_GET['email'])?$_GET['email']:'';
$sql = "UPDATE suggestions WHERE email='$email'";
if($conn->query($sql) === True)
{
	echo "Comment edited successfully";
}
else
{
	echo "Error changing " . mysqli_error($conn);
}
mysqli_close($conn);
?>