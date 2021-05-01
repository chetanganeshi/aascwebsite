<?php

include("navbar.php");

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = mysqli_connect("localhost", "root", "", "aascproject");
 
// Check connection
if (mysqli_connect_errno()) {
    printf("ERROR: Could not connect: %s \n", mysqli_connect_error());
    exit();
}

else {
	$c_id = mysqli_real_escape_string($mysqli, $_POST['txtcid']);
	$c_name = mysqli_real_escape_string($mysqli, $_POST['txtuname']);
	$c_email = mysqli_real_escape_string($mysqli, $_POST['txtemail']);
	$c_message = mysqli_real_escape_string($mysqli, $_POST['txtmsg']);
	$c_date = mysqli_real_escape_string($mysqli, $_POST['txtdate']);
	$c_replystatus = "Not Replied";
	$c_reply = "--";
	
	
	$sql = "INSERT INTO contactus VALUES ('".$c_id."','".$c_name."','".$c_email."','".$c_message."','".$c_date."','".$c_replystatus."','".$c_reply."')";
	$query = mysqli_query($mysqli, $sql);
	
	if ($query === TRUE) {
				    echo '<script> alert("Message has been Received!  We will contact you soon...")</script>';
					echo '<script type="text/javascript"> window.location = "index.php"; </script> ';
				}
				else {
				    echo "<script>alert('Message could not be sent. Error: $mail->ErrorInfo');";
					echo $e;
				}
	   }
?>