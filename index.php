<?php

include('config.php'); 
if(isset($_POST['submit'])){
  session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$type=$_POST['type'];
$model=$_POST['model'];
$rc=$_POST['rc'];
$detail=$_POST['detail'];
$dt=$_POST['datetime'];
$comment=$_POST['comment'];
$value='abcdefghijklmnopqurstuvwxyz0123456789';
$finalvalue=str_shuffle($value);
$booking_id=substr($finalvalue, 1,6);
$status='pending';

$query=mysqli_query($con,"INSERT INTO customer_data(name,email,address,pincode,type,model,rc,detail,dt,comment,booking_id,status) VALUES ('$name','$email','$address','$pincode','$type','$model','$rc','$detail','$dt','$comment','$booking_id','$status')");
if ($query==true) {
  $_SESSION['booking_id']=$booking_id;
  header('location:useraction');
}
else{
  echo "error found";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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

	<div class="container">
       <div class="table table-striped">
        <div class="jumbotron">
          <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-8">
                   <form  action=""  method="post" class="well form-horizontal">
                      <fieldset>
  
                        </label>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Date</label>
                            <div class="col-md-8 inputGroupContainer">
                              <?php date_default_timezone_set('Asia/Kolkata'); ?>
                               <div class="input-group"><input name="da" class="form-control" type="text" value="<?php  echo date('d/m/Y'); ?>" readonly></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input  name="name" placeholder="Enter Your Full Name" class="form-control" required="true" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input name="email" placeholder="Enter Your Email Address" class="form-control" required="true"  type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><textarea name="address" placeholder=" Enter Your Address" class="form-control" required="true"  type="text"></textarea></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code/ZIP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input name="pincode" placeholder="Postal Code/ZIP" class="form-control" required="true" type="text"></div>
                            </div>
                          </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Vehicle Type</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                <select name="type" class="selectpicker form-control">
                                <option value="bike">Bike</option>
                                <option value="car">Car</option>
                                <option value="bus">Bus</option>
                                <option value="truck">Truck</option>
                                </select></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Vehicle Model</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input  name="model" placeholder="Enter Your Vehicle Model Name" class="form-control" required="true" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Vehicle Registration No.</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input  name="rc" placeholder="Enter Your Vehicle Registration No." class="form-control" required="true" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Service Details</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><textarea name="detail" placeholder="Specify Your Service Details" class="form-control" required="true"  type="text"></textarea></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Enter Date & Time To Book Slot </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input  name="datetime" class="form-control" required="true" type="datetime-local"></div>
                            </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Comments</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><textarea name="comment" placeholder="Comment Us To Help You Better" class="form-control" required="true"  type="text"></textarea></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                <input  name="submit" class="form-control btn btn-primary" type="Submit"></div>
                            </div>
                         </div>
                      </fieldset>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="footer navbar-dark bg-dark">
		<center><h3>All copyrights reserved</h3></center>
    </div>
</div>
</body>
</html>
