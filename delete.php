<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
	<?php
	include('config.php');
	session_start();
	$id=$_GET['id'];
	$query=mysqli_query($con,"UPDATE customer_data SET status='cancelled' WHERE id='$id' ");
	if($query==true)
	{
		$row=mysqli_fetch_assoc($query);
		$_SESSION['booking_id']=$row['booking_id'];
	?>
	<script type="text/javascript">
		alert('Data Successfully Deleted');
		window.location.href='useraction';
	</script>
	<?php
	}
	else
	{
	?>
	<script type="text/javascript">
		alert('Data Deletion Failed');
		window.location.href='Adminpage';
	</script>
	<?php
	}
	?>
</body>
</html>