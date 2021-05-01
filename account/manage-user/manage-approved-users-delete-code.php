<?php

include '../../connection.php';


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$uid = $_POST['uid'];

 			$query_update = mysqli_query($conn,"DELETE FROM approvedusers WHERE uid='$uid'");

 			echo "1"; 				
	}

?>

