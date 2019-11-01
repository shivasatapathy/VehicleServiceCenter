<?php

$mailsubject='Booking Confirmation';
include ('config.php');
session_start();
$booking_id=$_SESSION['booking_id'];
$query=mysqli_query($con,"SELECT * FROM customer_data WHERE booking_id='$booking_id'");
$row=mysqli_fetch_assoc($query);
$mailto=$row['email'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$pincode=$row['pincode'];
$type=$row['type'];
$model=$row['model'];
$rc=$row['rc'];
$dt=$row['dt'];
$comment=$row['comment'];
//$mailmsg=$_POST['msg'];
//$phototmpname=$_FILES['photo']['tmp_name'];
//$photoname=$_FILES['photo']['name'];
$status=$row['status'];
$mailmsg="<center><h2>Booking Details</h2><table border=2px>
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
		<tr>
			<td>
				$booking_id
			</td>
			<td>
				$name
			</td>
			<td>
				$email
			</td>
			<td>
				$address
			</td>
			<td>
				$pincode
			</td>
			<td>
				$type
			</td>
			<td>
				$model
			</td>
			<td>
				$rc
			</td>
			<td>
				$detail
			</td>
			<td>
				$dt
			</td>
			<td>
				$comment
			</td>
			<td>
				$status
			</td>
		</tr>
	</table>
	</center>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              //Passing `true` enables exceptions
   //Server settings
 $mail->SMTPDebug = 0;                                 // Enable verbose debug output by value 2
 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'shivasatapathyofficial@gmail.com';                 // SMTP username
 $mail->Password = 'Shiva12345';                           // SMTP password
 $mail->SMTPSecure = 'tls'; //or ssl                           // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 587;   // or 465                                 // TCP port to connect to

//Recipients
$mail->setFrom('shivasatapathyofficial@gmail.com', 'Vehicle Service Center');
 
$mail->addAddress($mailto); 

// $addr = explode(',',$mailto);
// echo $ok=count($addr);

// foreach($addr as $address){
// $mail->AddAddress($address);

// }

//$mail->AddAttachment($phototmpname, $photoname);
    // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');
 
//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//Content
 $mail->isHTML(true);                                  // Set email format to HTML
 $mail->Subject = $mailsubject;
 $mail->Body    = $mailmsg;

 
if(!$mail->send())
{
	echo"mail not send";
	
}
else{
	header('location:adminaction');
	//echo "OTP sent";
}


// if($i==$ok){

// }
?>









