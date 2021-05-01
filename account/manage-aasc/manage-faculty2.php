<?php
include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
		$lecturername =$_POST['lecturername'];
        $qualification=$_POST['qualification'];
        $designation=$_POST['designation'];
        $department=$_POST['department'];
        $cno=$_POST['cno'];

$query="INSERT INTO faculty(id, lecturername, qualification, designation, department, cno) VALUES ('$id', '$lecturername', '$qualification', '$designation', '$department', '$cno')";
$ans=mysqli_query($conn,$query);
echo "1";

}
?>