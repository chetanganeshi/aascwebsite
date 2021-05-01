<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$date = $_POST['date'];
		$notice = $_POST['notice'];
		$weblink = $_POST['weblink'];

		$query_update = mysqli_query($conn, "UPDATE notifications SET date='$date', notice='$notice', weblink='$weblink' WHERE id='$id'");

		echo "1";
	}

?>