<?php
    include 'connect.php';
    if (!isset($_POST['Submit']))
    {
        $id = $_GET['id'];
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sql = "UPDATE `suggestions` SET `id`='$id',`fname`='$fname',`email`='$email',`message`='$message' WHERE '$id'";

        if($conn->query($sql) === True)
        {
            echo "Comment edited successfully";
            echo "<script> window.location.href = \"list.php\"; </script>";
        }
        else
        {
            echo "Error changing " . mysqli_error($conn);
        }
        mysqli_close($conn);
}
?>