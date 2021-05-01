<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = mysqli_connect("localhost", "root", "", "aascproject");
 
// Check connection
if (mysqli_connect_errno()) {
    printf("ERROR: Could not connect: %s \n", mysqli_connect_error());
    exit();
}
else {
	$uid = mysqli_real_escape_string($mysqli, $_POST['txtuid']);
	$emailid = mysqli_real_escape_string($mysqli, $_POST['txtemail']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['txtpass']);
	$cpass = mysqli_real_escape_string($mysqli, $_POST['txtcpass']);
	$name = mysqli_real_escape_string($mysqli, $_POST['txtname']);
	$role = mysqli_real_escape_string($mysqli, $_POST['txtrole']);
	$dob = mysqli_real_escape_string($mysqli, date('d-m-Y', strtotime($_POST['txtdob'])));
	
	$aadhar = mysqli_real_escape_string($mysqli, $_POST['txtaadhar']);
	$smno = mysqli_real_escape_string($mysqli, $_POST['txtsmno']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['txtgender']);
	$bloodgroup = mysqli_real_escape_string($mysqli, $_POST['txtbloodgroup']);
	$category = mysqli_real_escape_string($mysqli, $_POST['txtcategory']);
	$nationality = mysqli_real_escape_string($mysqli, $_POST['txtnationality']);
	$fathername = mysqli_real_escape_string($mysqli, $_POST['txtfathername']);
	$mothername = mysqli_real_escape_string($mysqli, $_POST['txtmothername']);
	$fmno = mysqli_real_escape_string($mysqli, $_POST['txtfmno']);
	$address = mysqli_real_escape_string($mysqli, $_POST['txtaddress']);
	$city = mysqli_real_escape_string($mysqli, $_POST['txtcity']);
	$state = mysqli_real_escape_string($mysqli, $_POST['txtstate']);
	$country = mysqli_real_escape_string($mysqli, $_POST['txtcountry']);
	$pcode = mysqli_real_escape_string($mysqli, $_POST['txtpcode']);
	$coursename = mysqli_real_escape_string($mysqli, $_POST['txtcoursename']);
	$collegename = mysqli_real_escape_string($mysqli, $_POST['txtcollegename']);
	$joiningyear = mysqli_real_escape_string($mysqli, $_POST['txtjoiningyear']);
	$status = mysqli_real_escape_string($mysqli, $_POST['txtstatus']);
	
	$sql = "INSERT INTO registration1(uid, emailid, pass, cpass, name, role, dob, aadharnumber, smno, gender, bloodgroup, category, nationality, fathername, mothername, fmno, address, city, state, country, pcode, coursename, collegename, joiningyear, applicationstatus) VALUES ('".$uid."','".$emailid."','".$pass."','".$cpass."','".$name."','".$role."','".$dob."','".$aadhar."','".$smno."','".$gender."','".$bloodgroup."','".$category."','".$nationality."','".$fathername."','".$mothername."','".$fmno."','".$address."','".$city."','".$state."','".$country."','".$pcode."','".$coursename."','".$collegename."','".$joiningyear."','".$status."')";
	$query = mysqli_query($mysqli, $sql);
	
	if ($query === TRUE) {
				// Load Composer's autoloader
				require '../../phpMyAdmin/vendor/autoload.php';

				// Instantiation and passing `true` enables exceptions
				$mail = new PHPMailer(true);

				try {
				    //Server settings
				    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
				    $mail->isSMTP();                                            // Send using SMTP
				    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
				    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
				    $mail->Username   = 'truthspyofficial@gmail.com';                     // SMTP username
				    $mail->Password   = 'TruthSpy@123';                               // SMTP password
				    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
				    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
				
				    //Recipients
				    $mail->setFrom('truthspyofficial@gmail.com', 'Admin-AASC');
				    $mail->addAddress($emailid, $name);     // Add a recipient
				    //$mail->addAddress('truthspyofficial@gmail.com');               // Name is optional
				    $mail->addReplyTo('truthspyofficial@gmail.com', 'Admin-AASC');
				    //$mail->addCC('cc@example.com');
				    //$mail->addBCC('bcc@example.com');
				
				    // Attachments
				    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				
				    // Content
				    $mail->isHTML(true);                                  // Set email format to HTML
				    $mail->Subject = "AASC - Account - Registration";
					
					ob_start();
					include('emailtemplates/registration-template.php');
					$mail->Body = ob_get_contents();
					ob_end_clean();
				    
				
				    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				
				    $mail->send();
		
					echo '<script> alert("Data Submitted! Check your registered email for more details. You can login after your account get approved!");</script>'; 
					echo "<script>window.location.href='index.php';</script>";
					} catch (Exception $e) {
				    echo 'Message could not be sent. Error: $mail->ErrorInfo';
					}
	}
	else {
		printf ("could not inserted record: %s \n", mysqli_error($mysqli));
	}
}
     
?>

<!--<?php 
$to = $emailid;

$message = "Name: ".$name;
$message .= "Password: ".$pass;

$subject = "Registration Successfull..!";

$mailheaders = "From: AdoniCollege <website@college.com> \n";
$mailheaders .= "Reply-To: ".$emailid;

if(mail($to, $subject, $message, $mailheaders))
echo 'success';
else
echo '<h1>failure</h1>';
?>

ob_start();
include('invoice.php');
$mail->Body = ob_get_contents();
ob_end_clean();


-->

<script type="text/javascript">

</script> 