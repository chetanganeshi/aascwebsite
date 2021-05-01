<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
        
        $departments = $_POST['departments'];

$query="INSERT INTO departments(id, departments) VALUES ('$id','$departments')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>