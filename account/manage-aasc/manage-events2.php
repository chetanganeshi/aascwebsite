<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
        $name = $_POST['name'];
        $timings= $_POST['timings'];
        $info = $_POST['info'];

$query="INSERT into events1(id, name, timings, info) values ('$id','$name','$timings','$info')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>