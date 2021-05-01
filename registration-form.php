<?php

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
		echo '<script> alert("Data Submitted! You can login after your account get approved!");</script>'; 
		echo "<script>window.location.href='index.php';</script>";
	}
	else {
		printf ("could not inserted record: %s \n", mysqli_error($mysqli));
	}
}
     
?>

<script type="text/javascript">

</script> 
