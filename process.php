<?php

$to = "chetanganeshi1812@gmail.com";
$name = "<p><b>Name:</b>".$_POST['name']."</p>";
$email = "<p><b>Email:</b>".$_POST['email']."</p>";
$message = "<p><b>Message:</b>".$_POST['message']."</p>";
$subject = "Response from Website";

$mailheaders = "From: AdoniCollege<website@college.com> \n";
$mailheaders .= "Reply-To: ".$_POST['email'];

if(mail($to, $subject, $message, $mailheaders))
echo 'success';
else
echo 'failure';

?>
<!DOCTYPE html>
<html>
	<head>
		<title> process </title>
	</head>
	<body>
		<p>Thanks <b> <?php echo $_POST['name'];?> </b></p>
		<p>Your Email Address <b> <?php echo $_POST['email'];?> </b></p>
		<p>Your Message <br> <b> <?php echo $_POST['message'];?> </b></p>
		<br><br>
		<a href="contactus.html">Go Back</a>
	</body>
</html>
	
	
	