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
	$id = mysqli_real_escape_string($mysqli, $_POST['uid']);
	$p_name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$p_email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$p_phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$p_query = mysqli_real_escape_string($mysqli, $_POST['c_query']);
	$p_message = mysqli_real_escape_string($mysqli, $_POST['message']);
	$p_replystatus = "Not Replied";
	$p_reply = "--";
	
	$sql = "INSERT INTO enquiry VALUES ('".$id."','".$p_name."','".$p_email."','".$p_phone."','".$p_query."','".$p_message."','".$p_replystatus."','".$p_reply."')";
	$query = mysqli_query($mysqli,$sql);
	
			if ($query === TRUE) {
					echo '<script> alert("Message has been received! We will contact you soon...")</script>';
					echo '<script type="text/javascript"> window.location = "index.php"; </script> ';
			} 
			else {
					echo '<script> alert("Message could not be sent. Error: <!--{$mail->ErrorInfo}-->")</script>';
			}
	  }
?>
<script type="text/javascript">
window.location = "index.php";
</script> 