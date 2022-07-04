<?php
include 'connect.php';
	if(isset($_POST['search']))
	{
		$keyword = $_POST['keyword'];
		$sql = "SELECT * FROM `suggestions` WHERE fname LIKE '$keyword' ORDER BY fname";
		$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		while($rows = mysqli_fetch_array($result))
		{
	    ?>
		<div>
		<h2>Result</h2>
		<hr style="border-top:2px dotted #ccc;"/>
		<div style="word-wrap:break-word;">
		<a href = "searchresult.php?id=<?php echo $rows['id']?>"><h4><?php echo $rows['fname']?></h4></a>
		<p><?php echo substr($rows['message'], 0, 100)?>...</p>
		</div>
		<hr style="border-bottom:1px solid #ccc;"/>
		</div>
		<?php
		}
	}
?>