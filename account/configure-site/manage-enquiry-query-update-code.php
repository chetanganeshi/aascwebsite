<?php

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$name = $_POST['name2'];
		$emailid = $_POST['emailid2'];
		$subject = $_POST['subject2'];
		$reply = $_POST['reply2'];
		
		$query = mysqli_query($conn, "UPDATE enquiry SET replystatus='Replied', reply ='$reply' WHERE id='$id'");
		echo "1";
	}

?>
