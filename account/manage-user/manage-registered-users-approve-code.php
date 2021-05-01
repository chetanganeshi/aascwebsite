<?php 

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
			echo '<script>alert("Approved!");</script>';
			echo "<script>window.location.href='manage-registered-users.php';</script>";
		}
		else {
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
?>


		
