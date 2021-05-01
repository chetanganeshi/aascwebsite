<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$timings = $_POST['timings'];
		$info = $_POST['info'];

		$query_update = mysqli_query($conn,"UPDATE events1 SET name='$name', timings='$timings', info='$info' WHERE id='$id'");


		echo "1";
	}

?>