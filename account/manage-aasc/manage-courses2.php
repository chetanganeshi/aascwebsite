<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
        
        $course = $_POST['course'];

$query="INSERT INTO course(id, name) VALUES ('$id','$course')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>