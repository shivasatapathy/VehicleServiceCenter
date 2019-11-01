<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div>
	<div class="navbar navbar-dark bg-dark navbar-fixed-top na">
        <span>
        	<center><h1>Welcome to the online vehicle service booking portal</h1></center>
        </span>
        <span>
            <a href="checkstatus"><button>Booking Status</button></a>  
        </span>
        <span>
        	<a href="login"><button>Login</button></a>
        </span>
  </div>
<div>
	<center>
	<h1>Customer Details</h1>

	<table border="3px">
		<tr>
			<td>
				Booking Id 
			</td>
			<td>
				Full Name
			</td>
			
			<td>
				E-mail
			</td>
			<td>
				Address
			</td>
			<td>
				Pincode
			</td>
			<td>
				Vehicle Type
			</td>
			<td>
				Vehicle Model
			</td>
			<td>
				Vehicle Registration no.
			</td>
			<td>
				Service Detail
			</td>
			<td>
				Slot Time
			</td>
			<td>
				Comment
			</td>
			<td>
				Status
			</td>
		</tr>
		<?php
		include ('config.php');
		$booking_id=trim($_POST['booking_id']);
		$query=mysqli_query($con,"SELECT * FROM customer_data WHERE booking_id='$booking_id' ");
		if($query==true){

		$row=mysqli_fetch_assoc($query);
		
			?>
		<tr>
			<td>
				<?php echo $row['booking_id'];?>
			</td>
			<td>
				<?php echo $row['name'];?>
			</td>
			<td>
				<?php echo $row['email'];?>
			</td>
			<td>
				<?php echo $row['address'];?>
			</td>
			<td>
				<?php echo $row['pincode'];?>
			</td>
			<td>
				<?php echo $row['type'];?>
			</td>
			<td>
				<?php echo $row['model'];?>
			</td>
			<td>
				<?php echo $row['rc'];?>
			</td>
			<td>
				<?php echo $row['detail'];?>
			</td>
			<td>
				<?php echo $row['dt'];?>
			</td>
			<td>
				<?php echo $row['comment'];?>
			</td>
			<td>
				<?php
				echo $row['status'];
				?>
				
			</td>
		</tr>
		<?php
	
}
else{
	?><script type="text/javascript">
		alert('Invalid booking id');
		window.location.href='checkstatus';
	</script><?php
}
	?>
	</table>
	</center>
</div>
<br><br><br><br><br>
    <div class="footer navbar-dark bg-dark">
		<center><h3>All copyrights reserved</h3></center>
    </div>
</div>
</body>
</html>