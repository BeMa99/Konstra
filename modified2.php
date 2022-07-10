<?php
include 'connect.php';
if (!isset($_POST['Submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phoneNum = $_POST['phoneNum'];
	$password = $_POST['password2'];
	$password2 = $_POST['password1'];
	if($password != $password2)
    {
        echo "<script> alert(\"Passwords Do Not Match!!!!\"); window.location.href = \"signup.php\"; </script>";
    }
    else
    {
        //$password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (fname, lname, email, phoneNum, password) VALUES ('$fname','$lname','$email','$phoneNum','$password')";
        if (mysqli_query($conn, $query))
        {
            echo "User Signup Successfully!";
            //create sessions
            session_start();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['useremail'] = $_POST['email'];
            $_SESSION['id'] = $id;
            echo "<script> alert(\"Welcome\"); window.location.href = \"Introduction.php\"; </script>";

        }
        else{echo "Error: " . $sql . ":-" . mysqli_error($conn);}
    }
	mysqli_close($conn);
}
?>
</body>
</html>
