<?php
	include 'connect.php';
	if(isset($_REQUEST['id']))
	{
	    $sql = "SELECT * FROM `suggestions` WHERE id = '$_REQUEST[id]'";
		$query = mysqli_query($conn, $sql ) or die(mysqli_error($conn));
		$fetch = mysqli_fetch_array($query); ?>
		<h3><?php echo $fetch['fname']?></h3>
		<p><?php echo nl2br($fetch['message'])?></p>
		<?php
		}
?>