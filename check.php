<?php

include('config.php');

// WHERE CustomerName LIKE 'a%'  Finds any values that start with "a"
// WHERE CustomerName LIKE '%a'  Finds any values that end with "a"
// WHERE CustomerName LIKE '%or%'  Finds any values that have "or" in any position
// WHERE CustomerName LIKE '_r%' Finds any values that have "r" in the second position
// WHERE CustomerName LIKE 'a_%_%' Finds any values that start with "a" and are at least 3 characters in length
// WHERE ContactName LIKE 'a%o'  Finds any values that start with "a" and ends with "o"

$name=$_POST['search'];
$query=mysqli_query($con,"SELECT * FROM customer_data WHERE booking_id LIKE'%$name%'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="padding-top: 44px;">
          
  <table class="table table-bordered">
    <tr>
      <td>
        Sl.No. 
      </td>
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
    </tr><?php
    $c=1;
    while ($row=mysqli_fetch_assoc($query))
    {
      ?>
    <tr>
      <td>
        <?php echo $c;?> 
      </td>
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
        if($row['status']=='pending')
        {?>
        <a href="edit?id=<?php echo $row['id'];?>"><button>Edit</button></a>
        &nbsp;&nbsp;
        <a href="confirm?id=<?php echo $row['id'];?>"><button>Confirm</button></a>
        &nbsp;&nbsp;
        <?php } ?>
        <a href="delete?id=<?php echo $row['id'];?>"><button>Cancel</button></a>
      </td>
    </tr>
    <?php
    $c++;
  }
  ?>  
      </table> 
      <br><br><br> 
    </form>
</div>
</body>
</html>