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
</head>
<body>
<table>
<tr>
<th>Name</th><th>Email</th><th>Message</th>
</tr>
<?php while($rows = $result->fetch_assoc()){?>
	<tr>
<td><?php echo $rows['fname'];?></td>
<td><?php echo $rows['email'];?></td>
<td><?php echo $rows['message'];?></td>
</tr>
<?php }?>
</table>
</body>

</html>