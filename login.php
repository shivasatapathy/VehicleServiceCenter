<?php
include('config.php');
if(isset($_POST['Login'])){
	session_start();
	if(!isset($_SESSION['email']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$query=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' && password='$password'");
		$rowcount=mysqli_num_rows($query);
		if ($rowcount==true) {
			$_SESSION["email"]=$email;
			header('location:Adminpage');
		}
		else{
		?>
			<script type="text/javascript">
				alert('Sorry Wrong userid or password');
				window.location.href='login';
			</script>
		<?php
		}
	}
	else{
		?>
		<script type="text/javascript">
			alert('Please Logout');
			window.location.href='logout';
		</script>
		<?php
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
  	<br><br><br>
	<div class="container">
		<center>
		<div class="jubotron">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-3">
					<form action="" method="post">
						E-mail:
						<input type="email" name="email"><br><br><br>
						Password:
						<input type="password" name="password"><br><br>
						<input type="submit" name="Login">
					</form>
				</div>
			</div>
		</div>
		</center>
	</div>
	<br><br><br><br><br>
    <div class="footer navbar-dark bg-dark">
		<center><h3>All copyrights reserved</h3></center>
    </div>
</div>
</body>
</html>