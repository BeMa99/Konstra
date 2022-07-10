<?php
    include 'connect.php';
    if (!isset($_POST['edit']))
    {
?>
<html>
<head>
<title>Update Suggestions</title>
<link rel = "icon" type = "image/x-icon" href = "/images/favicon.ico">
<link href = "bootstrap-5.0.0-beta3-dist/css/bootstrap.css" rel = "stylesheet">
<link href = "bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel = "stylesheet">
</head>
<body style = "text-align:center">
<div class = "container" id = "overall_back" style = "background-color:#ffde22; color:#3C1321; ">
<div class = "column" id = "column_overall">
<div id = "form-test" class = "row-md-6" style = "padding-bottom:50px; margin-top:50px; background-color:#3C1321; color:#ffde22; box-shadow:inset 2px -2px 2px, inset -2px 2px 2px ;">
<form method = "POST" action = "edit2.php">
<p style = "margin:30px">Update Suggestions</p></br>
<input type = "text" size = "40" name = "fname" value = "" placeholder = "Enter Name" style = "margin-top:30px; margin-bottom:15px;" required/></br>
<input type = "text" size = "40" name = "email" placeholder = "Email e.g johndoe@gmail.com" style = "margin-top:15px; margin-bottom:15px;" required/></br>
<input type = "text" size = "100" name = "message" placeholder = "Enter message. not more than 100 characters" style = "margin-top:15px; margin-bottom:30px;" required/></br>
<input type = "submit" value = "Submit" style = "background-color:#3C1321; color:#ffde22;">
</form>
</div>
</div>
</div>
</body>
</html>
<?php
{
?>