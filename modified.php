<?php
include 'connect.php';
if (!isset($_POST['Submit']))
{
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$query = "INSERT INTO suggestions (fname, email, message) VALUES ('$fname','$email','$message')";
	if (mysqli_query($conn, $query)){echo "Message Inserted Successfully!";}
	else{echo "Error: " . $sql . ":-" . mysqli_error($conn);}
	
	if(isset($_REQUEST["destination"]))
	{
      header("Location: {$_REQUEST["destination"]}");
	}else if(isset($_SERVER["HTTP_REFERER"]))
	{
      header("Location: {$_SERVER["HTTP_REFERER"]}");
	}
	mysqli_close($conn);
}
?>
</body>
</html>
