<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$title = $_POST['title1'];
		$detail = $_POST['detail1'];
		
	

		$query_update = mysqli_query($conn, "UPDATE faq SET Title='$title', Details ='$detail' WHERE id='$id'");

		echo "1";
	}

?>