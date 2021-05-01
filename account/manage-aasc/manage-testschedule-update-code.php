<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course = $_POST['course'];
		$semester = $_POST['semester'];
		$subject = $_POST['subject'];
		$date = $_POST['date'];
		$timings = $_POST['timings'];
		$details = $_POST['details'];

		$query_update = mysqli_query($conn, "UPDATE test SET course='$course', semester='$semester', subject='$subject', date='$date', timings='$timings', details='$details' WHERE id='$id'");

		echo "1";
	}

?>