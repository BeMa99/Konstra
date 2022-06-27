<html>
<head>
<title>SIGNUP page</title>
<link rel = "icon" type = "image/x-icon" href = "/images/favicon.ico">
<link href = "bootstrap-5.0.0-beta3-dist/css/bootstrap.css" rel = "stylesheet">
<link href = "bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel = "stylesheet">
</head>
<body style = "text-align:center">
<div class = "container" id = "overall_back" style = "background-color:#ffde22; color:#3C1321; ">
<div class = "column" id = "column_overall">
<div class = "row-md-6" style = "padding-bottom:50px;margin-bottom:50px; background-color:#3C1321; color:#ffde22; box-shadow:inset -2px 2px 2px, inset 2px -2px 2px;">
<h2>Signup Page</h2>
</div>
<div class = "row-md-6" id = "CV" style = "padding-bottom:50px;margin-bottom:50px; background-color:##ffde22; color:#3C1321; box-shadow:inset -2px 2px 2px, inset 2px -2px 2px;">
<form method = "post" action = "modified2.php">
<p style = "margin:30px"><b>Please fill in all items</b></p></br>
<input type="hidden" name="destination2" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
<input type = "text" size = "40" name = "fname" value = "" placeholder = "Enter First Name" style = "margin-top:30px; margin-bottom:15px;" required/></br>
<input type = "text" size = "40" name = "lname" value = "" placeholder = "Enter Last Name" style = "margin-top:30px; margin-bottom:15px;" required/></br>
<input type = "text" size = "40" name = "email" placeholder = "Email e.g johndoe@gmail.com" style = "margin-top:15px; margin-bottom:15px;" required/></br>
<input type = "text" size = "10" name = "phoneNum" placeholder = "Enter Phone Number" style = "margin-top:15px; margin-bottom:30px;" required/></br>
<input type = "password" size = "20" name = "password" placeholder = "Enter Password" style = "margin-top:15px; margin-bottom:30px;" required/></br>
<input type = "password" size = "20" name = "password" placeholder = "Confirm Password" style = "margin-top:15px; margin-bottom:30px;" required/></br>
<input type = "submit" value = "Submit" style = "background-color:#3C1321; color:#ffde22;">
</form>
</div>
</div>
</body>
</html>