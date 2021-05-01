<?php

include '../../connection.php';


$id = $_REQUEST['id'];

$get = mysqli_query($conn,"SELECT * FROM enquiry WHERE id='$id'");
while($row = mysqli_fetch_array($get))
{
  $name=$row['p_name'];
  $emailid=$row['p_email'];

  $subject ="Reply from AASC to your Enquiry";
  $reply="Hello <b>" .$name.", </b> <br><br> <b>Requested Course: ".$row['p_query']."</b> <br><br> <b>Your Query: </b>".$row['p_message']."<br><br> <b>Reply: </b>".$row['reply'];
}
				
?>
