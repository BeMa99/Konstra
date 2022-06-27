<?php
include 'connect.php';
if (!isset($_POST['edit']))
{
    $id = $_POST['id'];
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    $sql = "UPDATE 'suggestions' SET 'fname'=$fname','email'=$email', 'message'='$message' WHERE 'id'='$id'";
    if($conn->query($sql) === True)
    {
        echo "Comment edited successfully";
    }
    else
    {
        echo "Error changing " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>