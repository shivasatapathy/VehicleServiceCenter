<?php
include ('config.php');
$id=$_GET['id'];
$query=mysqli_query($con,"SELECT * FROM customer_data WHERE id='$id'");
$row=mysqli_fetch_assoc($query);
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

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div>
	<div class="navbar navbar-dark bg-dark navbar-fixed-top na">
        <span>
        	<center><h1>Welcome to the online vehicle service booking portal</h1></center>
        </span>
        <span>
        		<a href="logout"><button>Logout</button></a>
      </span>
  </div>

	<div class="container">
       <div class="table table-striped">
        <div class="jumbotron">
          <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-8">
                   <form  action="update"  method="post" class="well form-horizontal">
                      <fieldset>
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Date</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input name="da" class="form-control" type="date" value="<?php date_default_timezone_set('Asia/Kolkata');echo date('m/d/y'); ?>" readonly></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input  name="name" class="form-control" value="<?php echo $row['name'];?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input name="email"class="form-control"  value="<?php echo $row['email']?>"  type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><textarea name="address" class="form-control"  value="<?php echo $row['address']?>" type="text"></textarea></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Postal Code/ZIP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input name="pincode" placeholder="Postal Code/ZIP" class="form-control" value="<?php echo $row['pincode']?>" type="text"></div>
                            </div>
                          </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Vehicle Type</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                <select name="type" class="selectpicker form-control">
                                <option value="<?php echo $row['type'];?>"><?php echo $row['type'];?></option>
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
                               <div class="input-group"><input  name="model" class="form-control"  value="<?php echo $row['model']?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Vehicle Registration No.</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input  name="rc" class="form-control" value="<?php echo $row['rc']?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Enter Date & Time To Book Slot </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input  name="datetime" class="form-control" value="<?php echo $row['dt']?>" type="text"></div>
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
