<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		
		$departments = $_POST['departments'];

		$query_update = mysqli_query($conn,"UPDATE departments SET departments='$departments' WHERE id='$id'");


		echo "1";
	}

?>