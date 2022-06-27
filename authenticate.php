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
        //if the account exists, we verify the password. Use password hash
        //if(password_verify($_POST['password'], $password))
        if($_POST['password'] === $password)
        {
            //create sessions
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['useremail'] = $_POST['email'];
            $_SESSION['id'] = $id;
            header('Location: Introduction.php');
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