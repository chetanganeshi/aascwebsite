<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';

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
				    $mail->Password   = 'jaihind123';                               // SMTP password
				    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
				    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
				
				    //Recipients
				    $mail->setFrom('truthspyofficial@gmail.com', 'Admin-AASC');
				    $mail->addAddress($emailid, $uname);     // Add a recipient
				    //$mail->addAddress('truthspyofficial@gmail.com');               // Name is optional
				    $mail->addReplyTo('truthspyofficial@gmail.com', 'Admin-AASC');
				    //$mail->addCC('cc@example.com');
				    //$mail->addBCC('bcc@example.com');
				
				    // Attachments
				    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				
				    // Content
				    $mail->isHTML(true);                                  // Set email format to HTML
				    $mail->Subject = $subject;
				    $mail->Body    = $reply;
				    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				
				    $mail->send();
					
				    echo '<script> alert("Message has been sent!")</script>';
					
				} catch (Exception $e) {
				    echo '<script> alert("Message could not be sent. Error: <!--{$mail->ErrorInfo}-->")</script>';
				}
				
?>