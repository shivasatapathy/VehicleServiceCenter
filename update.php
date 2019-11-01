<?php

include('config.php'); 
if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$type=$_POST['type'];
$model=$_POST['model'];
$rc=$_POST['rc'];
$dt=$_POST['datetime'];

$query=mysqli_query($con,"UPDATE customer_data SET name='$name',email='$email',address='$address',pincode='$pincode',type='$type',model='$model',rc='$rc',dt='$dt' WHERE id='$id'");
if ($query==true) {
  header('location:useraction');
}
else{
  echo "error found";
}
}
?>