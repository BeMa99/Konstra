<?php
include 'connect.php';
if (!isset($_POST['Submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phoneNum = $_POST['phoneNum'];
	$password = $_POST['password'];
	//$password = password_hash($password, PASSWORD_DEFAULT);
	$query = "INSERT INTO users (fname, lname, email, phoneNum, password) VALUES ('$fname','$lname','$email','$phoneNum','$password')";
	if (mysqli_query($conn, $query)){echo "User Signup Successfully!";}
	else{echo "Error: " . $sql . ":-" . mysqli_error($conn);}

	if(isset($_REQUEST["destination2"]))
	{
      header("Location: {$_REQUEST["destination2"]}");
	}else if(isset($_SERVER["HTTP_REFERER"]))
	{
      header("Location: {$_SERVER["HTTP_REFERER"]}");
	}
	mysqli_close($conn);
}
?>
</body>
</html>
