<?php

include '../../connection.php';


$id = $_REQUEST['id'];

$get = mysqli_query($conn,"SELECT * FROM contactus WHERE id='$id'");
while($row = mysqli_fetch_array($get))
{
  $uname=$row['uname'];
  $emailid=$row['emailid'];
  $subject ="Reply from AASC to your Contacted Query";
  $reply="Hello <b>" .$uname.", </b> <br><br> <b>Requested Query: ".$row['msg']."</b> <br><br> <b>Reply: </b>".$row['reply'];
}
				
?>
