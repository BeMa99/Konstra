<?php 
include 'connect.php';
$id = isset($_GET['id'])?$_GET['id']:'';
$sql = "DELETE FROM suggestions WHERE id = '$id'";
if($conn->query($sql) === True)
{
	echo "Comment Deleted successfully!";
	echo "<script> window.location.href = \"list.php\"; </script>";
}
else
{
	echo "Error deleting" . mysqli_error($conn);
}
mysqli_close($conn);
?>