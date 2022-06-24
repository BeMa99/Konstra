<?php
	$conn = mysqli_connect('localhost', 'root', '',"test") or die("unable to connect to host");
	if(!$conn){die('Could not connect to Mysql server'.mysql_error());}
?>