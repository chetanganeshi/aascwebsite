<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$title = $_POST['title'];
		$about = $_POST['about'];

		$query_update = mysqli_query($conn,"UPDATE support SET title='$title', about='$about' WHERE id='$id'");


		echo "1";
	}

?>