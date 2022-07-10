<?php
include 'connect.php';
if (!isset($_POST['email'], $_POST['password']))
{
    exit("Please fill in both fields!");
}
if($stmt = $conn->prepare('SELECT id, password FROM users WHERE email = ?'))
{//s = string, i = int, b = blob
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0)
    {
        $stmt->bind_result($id, $password);//bind results to id and password variables
        $stmt->fetch();
        //if the account exists, we verify the password.
        //if(password_verify($_POST['password'], $password))//when password hash is used
        if($_POST['password'] === $password)
        {
            session_start();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['useremail'] = $_POST['email'];
            $_SESSION['id'] = $id;
            echo "<script> alert(\"Welcome\"); window.location.href = \"Introduction.php\"; </script>";

        }
        else
        {
            echo 'Incorrect Password!';
        }
    }
    else
    {
        echo 'Incorrect Username or Password!';
    }
    $stmt->close();
}
?>
