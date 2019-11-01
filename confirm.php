<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
</head>
<body>
	<?php
	include('config.php');
	session_start();
	$id=$_GET['id'];
	$query=mysqli_query($con,"UPDATE customer_data SET status='confirmed' WHERE id='$id' ");
	if($query==true)
	{
		$query2=mysqli_query($con,"select * from customer_data where id='$id'");
		$row=mysqli_fetch_assoc($query2);
		$_SESSION['booking_id']=$row['booking_id'];
	?>
	<script type="text/javascript">
		alert('Application Confirmed');
		window.location.href='useraction';
	</script>
	<?php
	}
	else
	{
	?>
	<script type="text/javascript">
		alert('Failed');
		window.location.href='Adminpage';
	</script>
	<?php
	}
	?>
</body>
</html>