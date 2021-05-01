<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		
		$courses = $_POST['courses'];

		$query_update = mysqli_query($conn,"UPDATE course SET name ='$courses' WHERE id='$id'");


		echo "1";
	}

?>