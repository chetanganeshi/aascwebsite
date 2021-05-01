<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
						$uid=$_POST['uid'];
			            $emailid=$_POST['emailid'];
			            $password=$_POST['pass'];
			            $cpassword=$_POST['cpass'];
			            $name=$_POST['name'];
			            $role =$_POST['role'];
			            $dob =$_POST['dob'];
			            $aadhar =$_POST['aadharnumber'];
			            $studentmobile =$_POST['smno'];
			            $gender =$_POST['gender'];
			            $bloodgroup =$_POST['bloodgroup'];
			            $category =$_POST['category'];
			            $nationality =$_POST['nationality'];
			            $fathername =$_POST['fathername'];
			            $mothername =$_POST['mothername'];
			            $parentmobile =$_POST['fmno'];
			            $address =$_POST['address'];
			            $city =$_POST['city'];
			            $state =$_POST['state'];
			            $country =$_POST['country'];
			            $pincode =$_POST['pcode'];
			            $coursename =$_POST['coursename'];
			            $collegename =$_POST['collegename'];
			            $joiningyear =$_POST['joiningyear'];
			            $applicationstatus=$_POST['applicationstatus'];
	

		$query_update = mysqli_query($conn,"INSERT INTO registration1(uid, emailid, pass, cpass, name, role, dob, aadharnumber, smno, gender, bloodgroup, category, nationality, fathername, mothername, fmno, address, city, state, country, pcode, coursename, collegename, joiningyear, applicationstatus) VALUES ('".$uid."','".$emailid."','".$pass."','".$cpass."','".$name."','".$role."','".$dob."','".$aadhar."','".$studentmobile."','".$gender."','".$bloodgroup."','".$category."','".$nationality."','".$fathername."','".$mothername."','".$parentmobile."','".$address."','".$city."','".$state."','".$country."','".$pcode."','".$coursename."','".$collegename."','".$joiningyear."','".$applicationstatus."')");

		echo "1";
	}

?>