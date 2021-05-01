<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';



include '../../connection.php';

$uid = $_POST['idtxt'];

              $get = mysqli_query($conn, "SELECT * FROM registration1 WHERE uid='$uid'");
              while($row = mysqli_fetch_array($get))
              {
                $emailid=$row['emailid'];
                $password=$row['pass'];
                $cpassword=$row['cpass'];
                $name=$row['name'];
                $role =$row['role'];
                $dob =$row['dob'];
                $aadhar =$row['aadharnumber'];
                $studentmobile =$row['smno'];
                $gender =$row['gender'];
                $bloodgroup =$row['bloodgroup'];
                $category =$row['category'];
                $nationality =$row['nationality'];
                $fathername =$row['fathername'];
                $mothername =$row['mothername'];
                $parentmobile =$row['fmno'];
                $address =$row['address'];
                $city =$row['city'];
                $state =$row['state'];
                $country =$row['country'];
                $pincode =$row['pcode'];
                $coursename =$row['coursename'];
                $collegename =$row['collegename'];
                $joiningyear =$row['joiningyear'];
                $applicationstatus="approved";
				}

		$ans = mysqli_query($conn, "INSERT INTO approvedusers (uid, emailid, pass, cpass, name, role, dob, aadharnumber, smno, gender, bloodgroup, category, nationality, fathername, mothername, fmno, address, city, state, country, pcode, coursename, collegename, joiningyear, applicationstatus) VALUES ('$uid', '$emailid', '$password', '$cpassword', '$name', '$role', '$dob', '$aadhar', '$studentmobile', '$gender', '$bloodgroup', '$category', '$nationality', '$fathername', '$mothername', '$parentmobile', '$address', '$city', '$state', '$country', '$pincode', '$coursename', '$collegename', '$joiningyear', '$applicationstatus')");
		$ans1 = mysqli_query($conn, "UPDATE registration1 SET applicationstatus = 'approved' WHERE uid = '$uid'");
		
		if($ans && $ans1) {
			// Load Composer's autoloader
				require '../../../../phpMyAdmin/vendor/autoload.php';

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
				    $mail->Subject = "AASC - Account - Activated";
				
					ob_start();
					include('../../emailtemplates/approved-template.php');
					$mail->Body = ob_get_contents();
					ob_end_clean();
				
				    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				
				    $mail->send();
					
				    echo '<script> alert("Message has been sent!")</script>';
					
				} catch (Exception $e) {
				    echo 'Message could not be sent. Error: $mail->ErrorInfo';
				}
			
			
			
			echo '<script>alert("Approved!");</script>';
			echo "<script>window.location.href='manage-registered-users.php';</script>";
		}
		else {
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
?>


		