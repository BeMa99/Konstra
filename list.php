<?php
include 'connect.php';
$database = 'test';
$mysqli = new mysqli('localhost', 'root', '',$database);
$sql = "SELECT * FROM suggestions";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<html>
<head>
<title>List of all items in test database</title>
<link rel = "icon" type = "image/x-icon" href = "/images/favicon.ico">
<link href = "bootstrap-5.0.0-beta3-dist/css/bootstrap.css" rel = "stylesheet">
<link href = "bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel = "stylesheet">
</head>
<body style = "text-align:center">
<div class = "container" id = "overall_back" style = "background-color:#ffde22; color:#3C1321; ">
<div class = "column" id = "column_overall">

<div class = "row-md-6" style = "padding-bottom:50px;margin-bottom:50px; background-color:#3C1321; color:#ffde22; box-shadow:inset -2px 2px 2px, inset 2px -2px 2px;">
<h2>List of all items in the table</h2>
</div>
<div class = "row-md-6" id = "CV" style = "padding-bottom:50px;margin-bottom:50px; background-color:##ffde22; color:#3C1321; box-shadow:inset -2px 2px 2px, inset 2px -2px 2px;">
<table>
<tr>
<th  style="text-align:center; padding-right:20px;">Name</th><th  style="text-align:center; padding-right:20px;">Email</th><th  style="text-align:center; padding-right:20px;">Message</th>
</tr>
<?php while($rows = $result->fetch_assoc()){?>
	<tr>
<td style="text-align:center; padding-right:20px;"><?php echo $rows['fname'];?></td>
<td style="text-align:center; padding-right:20px;"><?php echo $rows['email'];?></td>
<td style="text-align:center; padding-right:20px;"><?php echo $rows['message'];?></td>
<td style="text-align:center; padding-right:20px;"><a href = "Delete.php?del = <?php echo $rows['email']?>">Delete</a></td>
<td style="text-align:center; padding-right:20px;"><a href = "edit.php?edit = <?php echo $rows['email']?>">Edit</a></td>
</tr>
<?php }?>
</table>
</div>
</body>

</html>