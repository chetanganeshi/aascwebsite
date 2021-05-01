<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$lecturername = $_POST['lecturername'];
        $qualification = $_POST['qualification'];
        $designation = $_POST['designation'];
        $department = $_POST['department'];
        $cno = $_POST['cno'];
		

		$query_update = mysqli_query($conn, "UPDATE faculty SET lecturername = '$lecturername', qualification = '$qualification', designation = '$designation', department ='$department', cno = '$cno' WHERE id='$id'");


		echo "1";
	}

?>