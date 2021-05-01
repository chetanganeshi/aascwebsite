<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
include 'connection.php';


$ck=0;
$role = 'user';

if(isset($_SESSION["uname"]))
{
	$uname = $_SESSION["uname"];
	$pass = $_SESSION["pass"];

	$get = mysqli_query($conn,"SELECT * FROM approvedusers WHERE emailid ='$uname' and pass='$pass'");
	if($row = mysqli_fetch_array($get))
	{
		$ck=1;
		// $fname=$row['FirstName']; to show data on different pages we use this 
		$uid = $row['uid'];
		$role=$row['role'];
		$emailid = $row['emailid'];
		
	}
	$get2 = mysqli_query($conn,"SELECT * FROM approvedusers WHERE uid='$uid'");
	while($row2 = mysqli_fetch_array($get2))	
	{
		$fname=$row2['name'];
	}
}
?>
