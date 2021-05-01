<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course = $_POST['course'];
		$price = $_POST['price'];
		$cdurt = $_POST['cdurt'];
		$cdesc = $_POST['cdesc'];

		$query_update = mysqli_query($conn, "UPDATE coursetype SET price='$price', course='$course', cdurt='$cdurt', cdesc='$cdesc' WHERE id='$id'");

		echo "1";
	}

?>